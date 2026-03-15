<?php

spl_autoload_register(function ($class) {
    $class = str_replace('LAM\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for both
    $filepath = __DIR__ . '/../classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); # only required for windows
    
    require_once $filepath;
});
use LAM\database;

$db = new database();
$id = $_GET['id'] ?? null;

if ($id) {
    $db->execute('DELETE FROM case_file WHERE id = :id', ['id' => $id]);
    $db->execute('DELETE FROM media WHERE id = :id', ['id' => $id]);
}

header('Location: ../../admin/dashboard.php');
exit;