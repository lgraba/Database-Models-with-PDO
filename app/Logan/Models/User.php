<?php
// User.php
// User class for holding and manipulating user data, even from the database

// Namespace for Composer autoloading - see composer.json
namespace Logan\Models;

class User
{
	// Return the user's first name
	public function getFirstName()
	{
		return $this->first_name;
	}
	
	// Return the user's full name
	public function getFullName()
	{
		// If the first and last name of the user exist, return them together
		if ($this->first_name && $this->last_name) {
			return "{$this->first_name} {$this->last_name}";
		}

		return null;
	}

	// Return the user's full name or username
	public function getFullNameOrUsername() {
		// Ternary operatory for short if statement
		return $this->getFullName() ?: $this->username;
	}
}