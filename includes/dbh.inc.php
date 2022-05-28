<?php

$dbServername = "localhost";
$dbUsername = "moe";
$dbPassword = "moe";
$dbName = "movie";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName,3307);

  if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
    
  }
  