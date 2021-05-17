<?php

class Audience extends Human {
    public function __construct($quantity, $mood) {
	echo "\nA group of " . $quantity . " " . $mood . " people arrives!\n";
    }

    public function showReaction($attitude = "good") {
	switch ($attitude) {
	    case "bad":
		echo "\n\nAudience BOOOOOOOOOOOOOS and starts leaving the venue\n";
		break;
            case "good":
		echo "\n\nAudience applauds and whistles loudly!\n";
		break;
	    case "overwhelmed":
	        echo "\n\nAudience applauds, screams and whistles for a several minutes\n";
		break;
	}
    }
}
