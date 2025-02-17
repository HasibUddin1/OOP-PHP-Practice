<?php

class Playlist
{
  	public function __construct(public $songs = [])
	{
		//	 	 
	}

    public function addSong($title){
        $this->songs[] = $title;
    }
}

$addingSong = new Playlist();

$addingSong->addSong('Bachna Ae Hasino');

// Of course, a Playlist should allow you to add songs. Can you create an addSong()
// method that receives a song title and appends it to the -&gt;songs property?