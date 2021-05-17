<?php

class Human {
    public function leave($name, $life = false) {
	if ($life == false) {
	    echo "\n" . $name . " smiles, waves, bows and leaves";
	}
	else {
	    echo "\n" . $name . " suddenly passes away";
	}
    }
}
