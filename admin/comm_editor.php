<?php
spl_autoload_register(function ($class) {
    $class = str_replace('LAM\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $filepath = __DIR__ . '/../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath);
    
    require_once $filepath;
    require_once '../includes/scripts/add-comm.php';
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Manager</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link type="text/css" href="../css/main.css" rel="stylesheet">
    <link type="text/css" href="../css/grid.css" rel="stylesheet">
    <script type="module" defer src="../js/main.js"></script>
</head>
<body 
data-page="eventEditor"
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

<div
style="
margin: 0 auto 0 20px;">
    <h4>L.A.M. CMS - Commemorations</h4>
</div>

<div
style="
margin: 0 10px 0 10px;">    
    <a 
    href="dashboard.html"
    style="
    text-decoration: none;
    color: black;
    background-color: rgb(133, 132, 132);
    padding: 3px;
    border: solid 1px black;
    border-radius: 5px;">
    CMS Dashboard</a>
</div>

<div
style="
margin: 0 10px 0 10px;">    
    <a 
    href="event_editor.html"
    style="
    text-decoration: none;
    color: black;
    background-color: rgb(133, 132, 132);
    padding: 3px;
    border: solid 1px black;
    border-radius: 5px;">
    Event Editor</a>
</div>

<div
style="
margin: 0 10px 0 10px;">    
    <a 
    href="blog_editor.html"
        style="
    text-decoration: none;
    color: black;
    background-color: rgb(133, 132, 132);
    padding: 3px;
    border: solid 1px black;
    border-radius: 5px;">Blog Manager</a>
</div>

<div
style="
margin: 0 10px 0 10px;">    
    <a 
    href="logout.php"
    style="
    text-decoration: none;
    color: black;
    background-color: rgb(133, 132, 132);
    padding: 3px;
    border: solid 1px black;
    border-radius: 5px;">
    Log Out</a>
</div>

</header>

    <main>

 <form class="input-form" id="addCommForm" method="POST" action="../includes/scripts/add-comm.php">

                <label>Name</label>
                <input  class="form-box-dash"
                        type="text" 
                        name="name" 
                        id="heroImage" 
                        placeholder=" ">
                <br>
                <br>
                <label>Service Number</label>
                <input  class="form-box-dash" 
                        type="text" 
                        name="project" 
                        id="projectBox" 
                        placeholder="project">
                <br>
                <br>
                <label>Rank</label>
                <input  class="form-box-dash" 
                        type="text" 
                        name="proposition" 
                        id="propBox" 
                        placeholder="proposition">
                <br>
                <br>
                <label>Age</label>
                <input  class="form-box-dash"
                        type="text" 
                        name="prop_ex" 
                        id="propImage" 
                        placeholder="Proposition Image">
                <br>
                <br>
                <label>birth</label>
                <input  class="form-box-dash" 
                        type="text" 
                        name="prop_caption" 
                        id="propCaption" 
                        placeholder="Proposition Image Caption">
                <br>
                <br>
                <label>Death</label>
                <input 
                        class="form-box-dash" 
                        type="text" 
                        name="deliverables" 
                        id="delivBox" 
                        placeholder="deliverables">
                <br>
                <br>
                <label>Enlist</label>
                <input  class="form-box-dash" 
                        type="text" 
                        name="work_ex" 
                        id="workImage" 
                        placeholder="Work Image">
                <br>
                <br>
                <label>Details</label>
                <input  class="form-box-dash"
                        type="text" 
                        name="work_caption" 
                        id="workCaption" 
                        placeholder="Work Image Caption">
                <br>
                <br>
                <label>Picture</label>
                <input  class="form-box-dash" 
                        type="text" 
                        name="product_ex" 
                        id="prodImage" 
                        placeholder="Product Image">
                <br>
                <br>
                <div id="feedback"></div>

                <input  class="form-box-dash"
                        id="send-button" 
                        type="submit" 
                        value="Submit">
            </form>

    </main>

</body>
</html>