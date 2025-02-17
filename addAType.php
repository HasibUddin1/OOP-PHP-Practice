<?php

class Playlist
{
	public function __construct(public array $songs)
	{
		//
	}
}

// The $songs constructor parameter currently accepts a value of any type. Use the
// array type to enforce that Playlist expects an array of songs.

