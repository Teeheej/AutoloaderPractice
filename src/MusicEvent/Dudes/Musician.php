<?php

namespace MusicEvent\Dudes;

use MusicEvent\Things\Instruments\Guitar;
use MusicEvent\Things\Instruments\Drums;
use MusicEvent\Things\Instruments\Vocals;
use MusicEvent\Things\Instruments\Bass;

class Musician extends Human {
    public $name;
    public $instrument;
    
    public function __construct($name, $instrument) {
	    $this->name = $name;
	    
	    switch ($instrument) {
	        case "Guitar":
	            $this->instrument = new Guitar;
	            return;
	        case "Drums":
	            $this->instrument = new Drums;
	            return;
	        case "Bass":
	            $this->instrument = new Bass;
	            return;
	        case "Vocals":
	            $this->instrument = new Vocals;
	            return;
	    }
    }

    public function comeToStage($bass = false) {
	    return $this->instrument::hold($this->name, $bass);
    }

    public function playInstrument() {
	    return $this->instrument::produceSthBeautiful($this->name);
    }
}
