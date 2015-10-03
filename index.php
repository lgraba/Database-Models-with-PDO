<?php
// index.php
// Main file for Database Models with PHP Tutorial

// Initalization of database connection (PDO) and helper function(s)
require_once 'app/bootstrap.php';

// Set user variable to database query
$users = $db->query("
	SELECT * FROM users
");

// Set the fetch mode to FETCH_CLASS via User class
$users->setFetchMode(PDO::FETCH_CLASS, 'Logan\Models\User');
// Actually fetch the user as a class
$users = $users->fetchAll();

// Loop through our users and output name
foreach($users as $user) {
	echo $user->getFullNameOrUsername(), '<br>';
}