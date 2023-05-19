<?php
// Assuming you are using XAMPP with default settings

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$feedback = $_POST['feedback'];

// Create a new PDO instance
$dsn = 'mysql:host=localhost;dbname=survey_form;charset=utf8mb4';
$username = 'root';
$password = '';
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $username, $password, $options);

// Prepare and execute the SQL query to insert the feedback into the database
$sql = "INSERT INTO feedback (name, email, age, gender, feedback) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $age, $gender, $feedback]);

// Display success message
if ($stmt->rowCount() > 0) {
  echo "Feedback added successfully!";
} else {
  echo "Error occurred while adding feedback.";
}
?>
