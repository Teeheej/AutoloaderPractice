<?php
namespace MusicEvent\Things\Instruments;

use MusicEvent\Dudes\Musician;

class Bass extends Guitar
{

    function produceSthBeautiful(Musician $who)
    {
        return "\n" . $who->name . " plays smooth and a bit spicy bass line";
    }
}
