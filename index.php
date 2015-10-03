<?php
// index.php
// Main file for Database Models with PHP Tutorial

require_once 'app/bootstrap.php'; // Initalization of database connection (PDO) and helper function(s)
require_once 'app/Logan/Models/User.php'; // User class - to be PS4 autoloaded later

// Set user variable to database query
$user = $db->query("
	SELECT * FROM users
	WHERE id = 1
");

// Set the fetch mode to FETCH_CLASS via User class
$user->setFetchMode(PDO::FETCH_CLASS, 'User');
// Actually fetch the user as a class
$user = $user->fetch();

// User our helper function to dump the fetched user data
htmldump($user->getFirstName());