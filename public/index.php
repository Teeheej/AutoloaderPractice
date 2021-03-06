<?php
use MusicEvent\Dudes\Audience;
use MusicEvent\Dudes\Musician;
use MusicEvent\Places\Venue;
use MusicEvent\Things\Instruments\Guitar;
use MusicEvent\Things\Instruments\Drums;
use MusicEvent\Things\Instruments\Vocals;
use MusicEvent\Things\Instruments\Bass;

require_once dirname(__DIR__) . '/autoload.php';

$venue = new Venue();
echo $venue->initiate("Vladivostok", "small", "nice and cozy");

$audience = new Audience();
echo $audience->initiate(245, "psyched about the concert");

$additional_audience = new Audience();
echo $additional_audience->initiate(20, "drunk");

$misha = new Musician("Misha", new Guitar());
$vova = new Musician("Vova", new Drums());
$roma = new Musician("Roma", new Vocals());
$sasha = new Musician("Sasha", new Bass());

echo $vova->comeToStage();
echo $sasha->comeToStage(true);

echo $audience->showReaction();

echo $misha->comeToStage();
echo $roma->comeToStage();

echo $audience->showReaction();

echo $venue->startConcert();

echo $vova->playInstrument();
echo $sasha->playInstrument();
echo $misha->playInstrument();
echo $roma->playInstrument();

echo $venue->skipTime(2);

echo $vova->leave($vova->name);
echo $roma->leave($roma->name);
echo $sasha->leave($sasha->name);
echo $misha->leave($misha->name);

echo $audience->showReaction("overwhelmed");
echo "\nThe end\n";
