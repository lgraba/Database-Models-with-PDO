<?php
// Base.php
// Base class, to be extended upon in other classes

namespace Logan\Models;

// Use Carbon namespace for CArbon datetime manipulation
use Carbon\Carbon;

class Base
{
	protected $dates = [];

	// Magic method run upon instantiation
	public function __construct()
	{
		// Loop through passed dates
		foreach ($this->dates as $date) {
			// If the date is NULL we don't want to parse them with Carbon
			if (!$this->{$date}) {
				continue;
			}
			// If the date exists then parse it with Carbon
			$this->{$date} = new Carbon($this->{$date});
		}
	}
}