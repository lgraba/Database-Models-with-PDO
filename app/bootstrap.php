<?php
// bootstrap.php
// Helper function(s) and database PDO connection

// Require in Composer's autoload file
require_once 'vendor/autoload.php';

// Database Connection
$db = new PDO('mysql:host=localhost;dbname=db_models_tutorial', 'root', getenv('MYSQL_PASSWORD'));

// Helper function for pretty HTML var_dump
function htmldump($variable) {
	echo "<pre style=\"border: 1px solid #000; padding: 0.5em; margin: 0.5em;\">";
	var_dump($variable);
	echo "</pre>\n";
}