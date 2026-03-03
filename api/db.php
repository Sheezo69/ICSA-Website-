<?php
declare(strict_types=1);

/*
 * Update these values to match your local XAMPP/MySQL setup.
 */
const DB_HOST = '127.0.0.1';
const DB_NAME = 'icsa_website';
const DB_USER = 'root';
const DB_PASS = '';

function get_db_connection(): mysqli
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $connection->set_charset('utf8mb4');

    return $connection;
}
