<?php

ini_set('display_errors', 0);
error_reporting(E_ALL);     
header('Content-Type: application/json');
require_once('includes/connect.php');

$name       = trim(htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'));
$email      = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$message    = trim(htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8'));
$testAnswer = filter_var($_POST['testAnswer'] ?? '', FILTER_VALIDATE_INT);
$honeypot   = trim($_POST['honeypot'] ?? '');


$errors = [];

if (!empty($honeypot)) {
    $errors['honeypot'] = 'Spam detected.';
}

$correctAnswer = 8;
if ($testAnswer !== $correctAnswer) {
    $errors['testAnswer'] = 'Incorrect answer to the test question.';
}

if (!$name) {
    $errors['name'] = 'Name is required.';
}

if (!$email) {
    $errors['email'] = 'Valid email is required.';
}

if (!$message) {
    $errors['message'] = 'Message is required.';
}

if (!empty($errors)) {
    echo json_encode(['errors' => $errors]);
    exit;
}

$stmt = $connect->prepare("INSERT INTO contacts (name, email, message) VALUES(?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

    if($stmt->execute()) {
        // Send email
        $to = ' ';
        $subject = 'Message from the London Aircraft Museum Website';
        $emailBody = "You have received a new contact form submission:\n\n";
        $emailBody .= "Name: " . $name . "\n";
        $emailBody .= "Email: " . $email . "\n\n";
        $emailBody .= "Message: " . $message;

        mail($to, $subject, $emailBody);

        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Database error, please try again']);
    }
?>