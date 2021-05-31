<?php
namespace MusicEvent\Things\Instruments;

use MusicEvent\Dudes\Musician;

class Vocals extends BasicInstrument
{

    function hold(Musician $who)
    {
        return "\n" . $who->name . " comes to the mic and adjusts it's height";
    }

    function produceSthBeautiful(Musician $who)
    {
        return "\n" . $who->name . " performs nice clean vocal part and fiendish growl";
    }
}
