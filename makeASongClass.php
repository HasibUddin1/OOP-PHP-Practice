<?php

class Playlist
{
    public function __construct(public string $name, public array $songs)
    {
        //
    }
}

class Song{
    public function __construct(public string $name, public string $artist){
        //
    }
}

$songs = [
	new Song('Kesaria', 'Arijit Singh'),
    new Song('Main rahoon ya na rahoon', 'Armaan Malik')
];

$playlist = new Playlist('90s Movie Soundtracks', $songs);

// Each song in our playlist is currently just a string. But what if we need to
// gather other information, such as the artist? Create a new Song class that
// accepts a name and artist in its constructor. Then update the $songs array to
// contain instances of Song.

