<?php

//$factory = new \Patterns\Factories\WindowsFactory();
$factory = new \Patterns\Factories\MacFactory();
$button = $factory->createButton();
$checkbox = $factory->createCheckbox();

echo 'Show checkbox';
echo $checkbox->drow();
echo 'Show button';
echo $button->drow();