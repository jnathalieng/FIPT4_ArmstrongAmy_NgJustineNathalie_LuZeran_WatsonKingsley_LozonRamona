<?php
$host     = 'localhost';
$dbname   = 'london_aircraft_museum';
$username = 'root';
$password = '';

$connect = new mysqli('localhost','root','','london_aircraft_museum');

if(!$connect) {
    die(json_encode(['status' => 'error', 'message' => 'Connection failed: ' . mysqli_connect_error()]));
}
?>