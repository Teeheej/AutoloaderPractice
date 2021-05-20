<?php

namespace MusicEvent\Things\Instruments;


class Vocals extends BasicInstrument {
    function hold($who) {
        return "\n" . $who . " comes to the mic and adjusts it's height";
    }

    function produceSthBeautiful($who) {
        return "\n" . $who .  " performs nice clean vocal part and fiendish growl";
    }
}
