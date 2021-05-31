<?php
namespace MusicEvent\Places;

class SpaceTime
{

    public function skipTime(int $hours)
    {
        return "\n\n..." . $hours . " hours later...\n";
    }
}
