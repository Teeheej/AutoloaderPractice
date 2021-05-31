<?php
namespace MusicEvent\Things\Instruments;

use MusicEvent\Things\Thing;
use MusicEvent\Dudes\Musician;

abstract class BasicInstrument extends Thing
{

    abstract function hold(Musician $who);

    abstract function produceSthBeautiful(Musician $who);
}
