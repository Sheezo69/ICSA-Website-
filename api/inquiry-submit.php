<?php
declare(strict_types=1);

header('Content-Type: application/json');

require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

function clean_value(string $key, int $maxLength = 255): string
{
    $value = isset($_POST[$key]) ? trim((string)$_POST[$key]) : '';
    if ($maxLength > 0) {
        $value = substr($value, 0, $maxLength);
    }
    return $value;
}

$name = clean_value('name', 120);
$email = clean_value('email', 190);
$phone = clean_value('phone', 40);
$course = clean_value('course', 140);
$preferredTime = clean_value('preferred_time', 20);
$message = clean_value('message', 4000);

if ($name === '' || $email === '' || $phone === '' || $course === '') {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Name, email, phone, and course are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address']);
    exit;
}

$validTimes = ['morning', 'afternoon', 'evening', ''];
if (!in_array($preferredTime, $validTimes, true)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Invalid preferred time']);
    exit;
}

try {
    $connection = get_db_connection();

    $ipAddress = isset($_SERVER['REMOTE_ADDR']) ? substr((string)$_SERVER['REMOTE_ADDR'], 0, 45) : null;
    $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? substr((string)$_SERVER['HTTP_USER_AGENT'], 0, 255) : null;

    $stmt = $connection->prepare(
        'INSERT INTO course_inquiries (name, email, phone, course, preferred_time, message, ip_address, user_agent)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
    );

    $preferredTime = $preferredTime !== '' ? $preferredTime : null;
    $message = $message !== '' ? $message : null;

    $stmt->bind_param(
        'ssssssss',
        $name,
        $email,
        $phone,
        $course,
        $preferredTime,
        $message,
        $ipAddress,
        $userAgent
    );
    $stmt->execute();

    echo json_encode(['success' => true, 'message' => 'Inquiry saved']);
} catch (Throwable $exception) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Unable to save inquiry right now']);
}
