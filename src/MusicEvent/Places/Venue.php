<?php

namespace MusicEvent\Places;


class Venue extends SpaceTime {

    public function initiate($city, $size, $qualities) {
        return "\nA " . $size . ", " . $qualities . " venue opens it's doors to people of " . $city . "!\n";
    }
    
    public function startConcert() {
	return "\nMost lights are put off. Concert is about to start!\n";
    }
}
