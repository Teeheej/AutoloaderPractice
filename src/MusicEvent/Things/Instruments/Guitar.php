<?php

namespace MusicEvent\Things\Instruments;


class Guitar extends BasicInstrument {
    function hold($who, $bass = false) {
	if ($bass == false) {
	    return "\n" . $who . " hangs guitar on their shoulder";
	}
	else {
	    return "\n" . $who . " hangs a nice Fender bass guitar on their shoulder";
	}
    }

    function produceSthBeautiful($who) {
        return "\n" . $who . " plays a sick riff and a heavenly solo";
    }
}
