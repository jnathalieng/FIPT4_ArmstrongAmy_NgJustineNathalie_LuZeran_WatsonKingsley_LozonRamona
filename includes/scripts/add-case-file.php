<?php

spl_autoload_register(function ($class) {
    $class = str_replace('LAM\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});

use LAM\database;
$database = new database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$hero = $_POST['hero'];
if ($hero == null || $hero == '') {
$_SESSION['error_messages']['Hero'] = "Hero is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

$project = $_POST['project'];
if ($project == null || $project == '') {
$_SESSION['error_messages']['project'] = "Project is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

$proposition = $_POST['proposition'];
if ($proposition == null || $proposition == '') {
$_SESSION['error_messages']['proposition'] = "Proposition is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

$prop_ex = $_POST['prop_ex'];
if ($prop_ex == null || $prop_ex == '') {
$_SESSION['error_messages']['prop_ex'] = "Proposition Image is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

$prop_caption = $_POST['prop_caption'];
if ($prop_caption == null || $prop_caption == '') {
$_SESSION['error_messages']['prop_caption'] = "Proposition Caption is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

$deliverables = $_POST['deliverables'];
if ($deliverables == null || $deliverables == '') {
$_SESSION['error_messages']['deliverables'] = "Deliverables is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

$work_ex = $_POST['work_ex'];
if ($work_ex == null || $work_ex == '') {
$_SESSION['error_messages']['work_ex'] = "Work Image is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

$work_caption = $_POST['work_caption'];
if ($work_caption == null || $work_caption == '') {
$_SESSION['error_messages']['work_caption'] = "Work Image Caption is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

$product_ex = $_POST['product_ex'];
if ($product_ex == null || $product_ex == '') {
$_SESSION['error_messages']['product_ex'] = "Product Image is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

$product_caption = $_POST['product_caption'];
if ($product_caption == null || $product_caption == '') {
$_SESSION['error_messages']['product_caption'] = "Product Caption is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

$outcome = $_POST['outcome'];
if ($outcome == null || $outcome == '') {
$_SESSION['error_messages']['outcome'] = "Outcome is Required"; 
header('Location: ../../admin/add.php');
        exit(1);
}

 $database->execute('INSERT INTO case_file 
 (project, proposition, deliverables, outcome) 
VALUES (:project, :proposition, :deliverables, :outcome)',
        [
            'project'      => $project,
            'proposition'  => $proposition,
            'deliverables' => $deliverables,
            'outcome'      => $outcome
        ]
    );

$newId = $database->lastInsertId();

    $database->execute('INSERT INTO media 
    (id, Hero, prop_ex, prop_caption, work_ex, work_caption, product_ex, product_caption) 
VALUES (:id, :hero, :prop_ex, :prop_caption, :work_ex, :work_caption, :product_ex, :product_caption)',
        [
            'id'                =>$newId,
            'hero'              => $hero,
            'prop_ex'           => $prop_ex,
            'prop_caption'      => $prop_caption,
            'work_ex'           => $work_ex,
            'work_caption'      => $work_caption,
            'product_ex'        => $product_ex,
            'product_caption'   => $product_caption
        ]
    );

header('location: ../../admin/add.php');
exit;
}
?>