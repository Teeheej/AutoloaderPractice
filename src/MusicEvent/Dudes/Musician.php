<?php
namespace MusicEvent\Dudes;

use MusicEvent\Things\Instruments\Guitar;
use MusicEvent\Things\Instruments\Drums;
use MusicEvent\Things\Instruments\Vocals;
use MusicEvent\Things\Instruments\Bass;
use MusicEvent\Things\Instruments\BasicInstrument;

class Musician extends Human
{

    public $name;

    public $instrument;

    public function __construct(string $name, BasicInstrument $instrument)
    {
        $this->name = $name;
        $this->instrument = $instrument;
    }

    public function comeToStage(bool $bass = false)
    {
        return $this->instrument::hold($this, $bass);
    }

    public function playInstrument()
    {
        return $this->instrument::produceSthBeautiful($this);
    }
}
