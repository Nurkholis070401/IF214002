<?php

$host   = "localhost";
$dbuser = "postgres";
$dbpass = "kholis";
$port   = "5432";
$dbname = "books";

global $dbConnection;

$dbConnection = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass, array(
  PDO::ATTR_PERSISTENT => true
));
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);