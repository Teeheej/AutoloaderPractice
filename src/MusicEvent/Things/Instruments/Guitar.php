<?php
namespace MusicEvent\Things\Instruments;

use MusicEvent\Dudes\Musician;

class Guitar extends BasicInstrument
{

    function hold(Musician $who, bool $bass = false)
    {
        if ($bass == false) {
            return "\n" . $who->name . " hangs guitar on their shoulder";
        } else {
            return "\n" . $who->name . " hangs a nice Fender bass guitar on their shoulder";
        }
    }

    function produceSthBeautiful(Musician $who)
    {
        return "\n" . $who->name . " plays a sick riff and a heavenly solo";
    }
}
