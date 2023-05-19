<?php
// Assuming you are using XAMPP with default settings

$host = 'localhost';
$dbName = 'survey_form';
$username = 'root';
$password = '';

try {
  $dsn = "mysql:host=$host;dbname=$dbName;charset=utf8mb4";
  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
  ];
  $pdo = new PDO($dsn, $username, $password, $options);
  echo "Database connection established successfully!";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
