<?php

namespace MusicEvent\Things\Instruments;

use MusicEvent\Things\Thing;

abstract class BasicInstrument extends Thing {
    abstract function hold($who);
    abstract function produceSthBeautiful($who);
}
