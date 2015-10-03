<?php
// index.php
// Main file for Database Models with PHP Tutorial

// Initalization of database connection (PDO) and helper function(s)
require_once 'app/bootstrap.php';

// Set user variable to database query
$user = $db->query("
	SELECT * FROM users
	WHERE id = 1
");

// Set the fetch mode to FETCH_CLASS via User class
$user->setFetchMode(PDO::FETCH_CLASS, 'Logan\Models\User');
// Actually fetch the user as a class
$user = $user->fetch();

// User our helper function to dump the fetched user data
echo 'Hello, ' . $user->getFullNameOrUsername() . '!';