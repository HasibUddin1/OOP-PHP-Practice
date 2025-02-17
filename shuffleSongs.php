<?php

class Playlist
{
  	public function __construct(public $songs = [])
	{
		//
	}

    public function shuffle(){
        shuffle($this->songs[]);
    }
}

$playlist = new Playlist(['Bachna Ae Hasino', 'Hasina Man jayegi', 'Hasina nehi manegi']);


// One behavior we might desire is the ability to shuffle() a Playlist. Add that
// method now, and then use PHP's native shuffle() function (not to be confused
// with the method you just created) to shuffle the songs array.