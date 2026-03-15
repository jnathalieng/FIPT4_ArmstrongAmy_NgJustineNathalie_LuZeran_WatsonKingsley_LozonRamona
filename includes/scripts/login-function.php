<?php
session_start();

spl_autoload_register(function ($class) {
    $class = str_replace('LAM\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});

use LAM\database;

$database = new database();
//login function

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {

    $username = $_POST['username'];
    if ($username == null || $username == '') {
        $_SESSION['error_messages']['username'] = "Username is Required"; 
        header('Location: ../../admin/login.php');
        exit(1);
    }

    $password = $_POST['password'];
    if ($password == null || $password == '') {
        $_SESSION['error_messages']['password'] = "Password is Required"; 
        header('Location: ../../admin/login.php');
        exit(1);
    } 

    $results = $database->query('SELECT * FROM users WHERE 
    username = :username', ['username' => $username]);

    if ($results && password_verify($password, $results[0]['password'])) {
    $_SESSION['user_id'] = $results[0]['id'];
    $_SESSION['username'] = $results[0]['username'];
    header('Location: ../../admin/dashboard.php');
    exit;}    
    else {$error = 'Wrong username or password';
    }
}


