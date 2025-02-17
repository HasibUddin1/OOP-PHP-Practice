<?php

class Team
{
	public $name;
  
  	public function __construct($name)
	{
		$this->name = $name;			  
	}
}

$team = new Team('Warriors');

// What good is a Team that doesn't have a name? Instantiate Team and pass the
// name, &quot;Warriors&quot; to the constructor.