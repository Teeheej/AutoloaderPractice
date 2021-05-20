<?php

namespace MusicEvent\Dudes;


class Human {
    public function leave($name, $life = false) {
	if ($life == false) {
	    return "\n" . $name . " smiles, waves, bows and leaves";
	}
	else {
	    return "\n" . $name . " suddenly passes away";
	}
    }
}
