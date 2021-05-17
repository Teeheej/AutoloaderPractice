<?php

class Musician extends Human {
    public $name;
    public $instrument;
    
    public function __construct($name, $instrument) {
	$this->name = $name;
	$this->instrument = new $instrument;
    }

    public function comeToStage($bass = false) {
	$this->instrument::hold($this->name, $bass);
    }

    public function playInstrument() {
	$this->instrument::produceSthBeautiful($this->name);
    }
}
