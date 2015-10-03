<?php
// User.php
// User class for holding and manipulating user data, even from the database

class User
{
	// Return the user's first name
	public function getFirstName()
	{
		return $this->first_name;
	}
}