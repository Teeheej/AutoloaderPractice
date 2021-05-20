<?php

namespace MusicEvent\Things\Instruments;


class Drums extends BasicInstrument {
    function hold($who) {
        return "\n" . $who . " picks up the sticks and sits on the drum throne";
    }

    function produceSthBeautiful($who) {
        return "\n" . $who . " plays powerful yet sophisticated groove with dope licks";
    }
}
