<?php

class Team
{
  
  	public function __construct(public $name)
	{
		//			  
	}
}

$team = new Team('Warriors');

// We can instead leverage PHP constructor property promotion to make our code a
// bit less verbose. Can you rewrite this Team class to use it?