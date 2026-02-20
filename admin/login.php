<?php
session_start();
require '../includes/connect.php';

if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.html');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['userName'] ?? '');
    $password = trim($_POST['Password'] ?? '');

    if (empty($username) || empty($password)) {
        $error = 'Please enter both a username and password.';
    } else {
        $stmt = $connect->prepare('SELECT user_id, password FROM users WHERE username = ?');
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id']  = $user_id;
                $_SESSION['username'] = $username;

                header('Location: dashboard.html');
                exit;
            } else {
                $error = 'Incorrect username or password.';
            }
        } else {
            $error = 'Incorrect username or password.';
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link type="text/css" href="../css/main.css" rel="stylesheet">
    <link type="text/css" href="../css/grid.css" rel="stylesheet">
    <script type="module" defer src="../js/main.js"></script>
</head>
<body 
data-page="dashboard"
style="
background-color: rgb(48, 48, 48);
height: 100vh;">

<header
style="
display: flex;
align-items: center;
justify-content: center;
width: 100vw;
height: 50px;
border-bottom: solid 1px black;
margin-bottom: 10px;
background-color: rgb(156, 156, 156);
font-family: Arial, Helvetica, sans-serif;
font-size: larger;">
    <h4>CMS Login</h4>
</header>

        <main>
            <!-- contact -->
            <article id="signInSection" class="form-con col-span-full">
                <h3 
                id="signInTitle"
                style="
                color:  rgb(156, 156, 156);
                font-family: Arial, Helvetica, sans-serif;
                font-size: larger;
                margin: 30px;">Sign In</h3>
            <!--Buttons-->
            <form class="input-form" id="sign-in-form" method="POST" action="login.php">

                <input  class="form-box"
                        type="text" 
                        name="userName" 
                        id="userName" 
                        placeholder="Username" 
                        action=" ">
                <br>
                <br>
                <input 
                        class="form-box" 
                        type="text" 
                        name="Password" 
                        id="Password" 
                        placeholder="Password" 
                        action="sendmail.php">
                
                <div id="feedback">
                <?php if (!empty($error)) echo '<p style="color: red;">' . htmlspecialchars($error) . '</p>'; ?>
                </div>

                <input  style="
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        background-color:rgb(156, 156, 156);
                        color: rgb(48, 48, 48);
                        padding: 5px 10px;
                        border: solid 2px black;
                        border-radius: 5px;
                        box-shadow: 5px 5px black;
                        font-family: Arial, Helvetica, sans-serif;
                        font-size:large;"        
                        id="sign-in-button" 
                        type="submit" 
                        value="sign-in">
            </form>

        </article>
</main>

</body>
</html>