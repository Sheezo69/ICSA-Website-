<?php
declare(strict_types=1);

require_once __DIR__ . '/../api/db.php';

header('Content-Type: text/html; charset=utf-8');

try {
    $connection = get_db_connection();
    $result = $connection->query('SELECT * FROM contact_messages ORDER BY created_at DESC LIMIT 100');
} catch (Throwable $e) {
    die('Database error: ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Submissions</title>
    <style>
        body { font-family: system-ui, sans-serif; padding: 2rem; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 0.75rem; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #1e3a5f; color: white; }
        tr:hover { background: #f5f5f5; }
    </style>
</head>
<body>
    <h1>Contact Form Submissions</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['phone']) ?></td>
            <td><?= htmlspecialchars($row['course_interest'] ?? '-') ?></td>
            <td><?= htmlspecialchars($row['subject'] ?? '-') ?></td>
            <td><?= nl2br(htmlspecialchars(substr($row['message'] ?? '', 0, 100))) ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
