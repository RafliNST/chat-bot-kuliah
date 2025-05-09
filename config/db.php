<?php

function loadEnv($path)
{
    if (!file_exists($path))    throw new Exception(".env not found at: $path");

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        putenv("$name=$value");
    }
}

loadEnv(__DIR__ . '/../.env');

$dbHost = getenv('DB_HOST');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASS');
$dbName = getenv('DB_NAME');

try {
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($conn->connect_error) throw new Exception("connection failed: " . $conn->connect_error);    
}   catch (Exception $e) {
    die("Error: " . $e->getMessage());
}