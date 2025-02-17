<?php

class Playlist
{
    public function __construct(public array $songs)
    {
        //
    }
}

class Song
{
    public function __construct(public string $name, public string $artist)
    {

    }
}

$songs = [
    new Song('My Heart Will Go On', 'Celine Dion'),
    // ...
];

$playlist = new Playlist('90s Movie Soundtracks', $songs);