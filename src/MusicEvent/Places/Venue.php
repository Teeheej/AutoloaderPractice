<?php
namespace MusicEvent\Places;

class Venue extends SpaceTime
{

    public function initiate(string $city, string $size, string $qualities)
    {
        return "\nA " . $size . ", " . $qualities . " venue opens it's doors to people of " . $city . "!\n";
    }

    public function startConcert()
    {
        return "\nMost lights are put off. Concert is about to start!\n";
    }
}
