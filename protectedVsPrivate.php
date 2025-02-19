<?php

class Media
{
	private function difficulty(int $level)
	{
		return [
			1 => 'Beginner',
            2 => 'Intermediate',
            3 => 'Advanced'
		][$level] ?? 'Beginner';
	}
}

class Video extends Media
{
	//
}

// The Video class currently cannot  access the difficulty() method that is defined
// on the Media class from which it extends. Solve this issue by changing the
// visibility for this method.


class Media2
{
	protected function difficulty(int $level)
	{
		return [
			1 => 'Beginner',
            2 => 'Intermediate',
            3 => 'Advanced'
		][$level] ?? 'Beginner';
	}
}

class Video2 extends Media2
{
	//
}

// The Video class currently cannot  access the difficulty() method that is defined
// on the Media class from which it extends. Solve this issue by changing the
// visibility for this method.

