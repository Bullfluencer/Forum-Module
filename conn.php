<?php
session_start();
$db_username = 'root';
$db_password = 'root';
$conn = new PDO( 'mysql:host=localhost;dbname=forum2.0', $db_username, $db_password );
if(!$conn){
die("Fatal Error: Connection Failed!");
}

?>