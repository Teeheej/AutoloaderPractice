<?php
namespace MusicEvent\Dudes;

class Audience extends Human
{

    public function initiate(int $quantity, string $mood)
    {
        return "\nA group of " . $quantity . " " . $mood . " people arrives!\n";
    }

    public function showReaction(string $attitude = "good")
    {
        switch ($attitude) {
            case "bad":
                return "\n\nAudience BOOOOOOOOOOOOOS and starts leaving the venue\n";
                break;
            case "good":
                return "\n\nAudience applauds and whistles loudly!\n";
                break;
            case "overwhelmed":
                return "\n\nAudience applauds, screams and whistles for a several minutes\n";
                break;
        }
    }
}
