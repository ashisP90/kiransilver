<?php
$dbHostName = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'kiransilver';

global $db;
$db = new mysqli($dbHostName, $dbUserName, $dbPassword, $dbName);
if($db->connect_error){
  die("Connection failed: " . $db->connect_error);
}