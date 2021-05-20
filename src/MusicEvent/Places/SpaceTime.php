<?php

namespace MusicEvent\Places;


class SpaceTime {
    public function skipTime($hours) {
        return "\n\n..." . $hours . " hours later...\n";
    }
}
