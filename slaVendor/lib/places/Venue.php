<?php

class Venue extends SpaceTime {
    public $qualities;
    public $size;
    public $city;

    public function __construct($city, $size, $qualities) {
	$this->size = $size;
	$this->qualities = $qualities;
	echo "\nA " . $size . ", " . $qualities . " venue opens it's doors to people of " . $city . "!\n";
    }

    public function startConcert() {
	echo "\nMost lights are put out. Concert is about to start!\n";
    }
}
