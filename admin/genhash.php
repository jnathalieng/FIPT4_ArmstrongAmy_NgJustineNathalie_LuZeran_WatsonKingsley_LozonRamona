<?php
require '../includes/connect.php';

//refer to this to find the password and username for mike
$username = 'mikeBaker';
$email    = 'bakermike612@gmail.com';
$password = password_hash('iLoveHistory1944', PASSWORD_DEFAULT);

//DO NOT UN-COMMENT THIS AND OPEN IN LOCALHOST, IT WILL CREATE ANOTHER USER PROFILE FOR MIKE

//$stmt = $connect->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)');
//$stmt->bind_param('sss', $username, $password, $email);
//$stmt->execute();

//echo 'User created.';