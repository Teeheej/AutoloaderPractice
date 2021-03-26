<?php

class Guitar extends Instrument {
    function hold($who, $bass = false) {
	if ($bass == false) {
		echo "\n" . $who . " hangs guitar on their shoulder";
	}
	else {
		echo "\n" . $who . " hangs a nice Fender bass guitar on their shoulder";
	}
    }

    function produceSthBeautiful($who) {
        echo "\n" . $who . " plays a sick riff and a heavenly solo";
    }
}
