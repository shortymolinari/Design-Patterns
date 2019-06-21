<?php

namespace DesignPatterns\Behavioral\Observer\NewspaperExample;

use SplSubject;
use SplObserver;
use DesignPatterns\Behavioral\Observer\NewspaperExample\Newspaper;
use DesignPatterns\Behavioral\Observer\NewspaperExample\Reader;

require "../../../../vendor/autoload.php";

$newspaper = new Newspaper('Newyork Times');

$allen = new Reader('Allen');
$jim = new Reader('Jim');
$linda = new Reader('Linda');

//add reader
$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);

//remove reader
$newspaper->detach($linda);

//set break outs
$newspaper->breakOutNews('USA break down!');
