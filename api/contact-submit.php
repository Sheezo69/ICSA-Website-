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
$courseInterest = clean_value('course', 120);
$subject = clean_value('subject', 60);
$message = clean_value('message', 4000);

if ($name === '' || $email === '' || $phone === '') {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Name, email, and phone are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address']);
    exit;
}

try {
    $connection = get_db_connection();

    $ipAddress = isset($_SERVER['REMOTE_ADDR']) ? substr((string)$_SERVER['REMOTE_ADDR'], 0, 45) : null;
    $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? substr((string)$_SERVER['HTTP_USER_AGENT'], 0, 255) : null;

    $stmt = $connection->prepare(
        'INSERT INTO contact_messages (name, email, phone, course_interest, subject, message, ip_address, user_agent)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
    );

    $courseInterest = $courseInterest !== '' ? $courseInterest : null;
    $subject = $subject !== '' ? $subject : null;
    $message = $message !== '' ? $message : null;

    $stmt->bind_param(
        'ssssssss',
        $name,
        $email,
        $phone,
        $courseInterest,
        $subject,
        $message,
        $ipAddress,
        $userAgent
    );
    $stmt->execute();

    echo json_encode(['success' => true, 'message' => 'Contact message saved']);
} catch (Throwable $exception) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Unable to save message right now']);
}
