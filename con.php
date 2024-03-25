<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'health';
$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("sorry Failed to connect." . mysqli_connect_error());
}
