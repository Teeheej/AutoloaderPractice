<?php
namespace MusicEvent\Things\Instruments;

use MusicEvent\Dudes\Musician;

class Drums extends BasicInstrument
{

    function hold(Musician $who)
    {
        return "\n" . $who->name . " picks up the sticks and sits on the drum throne";
    }

    function produceSthBeautiful(Musician $who)
    {
        return "\n" . $who->name . " plays powerful yet sophisticated groove with dope licks";
    }
}
