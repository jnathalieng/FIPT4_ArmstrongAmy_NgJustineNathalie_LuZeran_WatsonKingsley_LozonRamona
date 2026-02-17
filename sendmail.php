<?php

ini_set('display_errors', 0);
error_reporting(E_ALL);     
header('Content-Type: application/json');


require_once('includes/connect.php');

$name  = trim($_POST['name']);
$email = trim($_POST['email']);
$msg   = trim($_POST['msg']);

$errors = [];

if(empty($name))  $errors['name']  = 'Name field cannot be empty';
if(empty($msg))   $errors['msg']   = 'Message field cannot be empty';

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'You must provide a valid email';
}

if(empty($errors)) {
    // Use prepared statements for safety
    $stmt = $connect->prepare("INSERT INTO contacts (name, org, email, msg) VALUES(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $msg);

    if($stmt->execute()) {
        // Send email
        $to = 'lozonramona@gmail.com';
        $subject = 'Message from your Portfolio site!';
        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: " . $name . "\n";
        $message .= "Email: " . $email . "\n\n";
        $message .= "Message: " . $msg;

        mail($to, $subject, $message);

        echo json_encode(['status' => 'success', 'message' => 'Message sent successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Database error, please try again']);
    }
} else {
    // Return errors as JSON
    echo json_encode(['status' => 'error', 'message' => implode(', ', $errors)]);
}
?>