<?php

spl_autoload_register(function ($class_name) {
    $dir_iterator = new RecursiveDirectoryIterator(dirname(__FILE__, 2));
    $iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST);

    foreach($iterator as $file) {
	if (is_file($file) and strpos($file, $class_name)) {
	    require $file;
        }
    }
});

$venue = new Venue("Vladivostok", "small", "nice and cozy");

$audience = new Audience(245, "psyched about the concert");
$drunkAudience = new Audience(16, "drunk");

$misha = new Musician("Misha", "Guitar");
$vova = new Musician("Vova", "Drums");
$roma = new Musician("Roma", "Vocals");
$sasha = new Musician("Sasha", "Bass");

$vova->comeToStage();
$sasha->comeToStage(true);

$audience->showReaction();

$misha->comeToStage();
$roma->comeToStage();

$audience->showReaction();

$venue->startConcert();

$vova->playInstrument();
$sasha->playInstrument();
$misha->playInstrument();
$roma->playInstrument();

$venue->skipTime(2);

$vova->leave($vova->name);
$roma->leave($roma->name);
$sasha->leave($sasha->name);
$misha->leave($misha->name);

$audience->showReaction("overwhelmed");
echo "\nThe end\n";