<?php

use LAM\database;
spl_autoload_register(function ($class) {
    $class = str_replace('LAM\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});

$db = new LAM\database();
$id = $_GET['id'] ?? null;
if (!$id) die('No project ID provided.');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->execute(
        'UPDATE case_file SET project=:project, proposition=:proposition, deliverables=:deliverables, outcome=:outcome WHERE id=:id',
        ['project' => $_POST['project'], 'proposition' => $_POST['proposition'], 'deliverables' => $_POST['deliverables'], 'outcome' => $_POST['outcome'], 'id' => $id]
    );
    $db->execute(
        'UPDATE media SET Hero=:hero, prop_ex=:prop_ex, prop_caption=:prop_caption, work_ex=:work_ex, work_caption=:work_caption, product_ex=:product_ex, product_caption=:product_caption WHERE id=:id',
        ['hero' => $_POST['hero'], 'prop_ex' => $_POST['prop_ex'], 'prop_caption' => $_POST['prop_caption'], 'work_ex' => $_POST['work_ex'], 'work_caption' => $_POST['work_caption'], 'product_ex' => $_POST['product_ex'], 'product_caption' => $_POST['product_caption'], 'id' => $id]
    );
    header('Location: ../../admin/dashboard.php');
    exit;
}
$results = $db->query(
    'SELECT case_file.project, case_file.proposition, case_file.deliverables, case_file.outcome, media.Hero, media.prop_ex, media.prop_caption, media.work_ex, media.work_caption, media.product_ex, media.product_caption FROM case_file JOIN media ON media.id = case_file.id WHERE case_file.id = :id',
    ['id' => $id]
    
);
$row = $results[0] ?? null;
if (!$row) { die('Project not found.'); }
?>