<?php
namespace MusicEvent\Dudes;

class Human
{

    public function leave(string $name, bool $life = false)
    {
        if ($life == false) {
            return "\n" . $name . " smiles, waves, bows and leaves";
        } else {
            return "\n" . $name . " suddenly passes away";
        }
    }
}
