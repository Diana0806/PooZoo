<?php

require('./Utiles/autoload.php');

$aviary1 = new aviary('Mountain', '1', 'clean');
$aviary2 = new aviary('Lake', '3', 'clean');
$aquarium1 = new aquarium('Shell', 3, 'clean');
$voliere1 = new voliere('Jungle', 1, 'dirty');
$voliere2 = new voliere('Forest', 2, 'clean');
$voliere3 = new voliere('Safari', 2, 'clean');


$tiger1 = new tiger('White Tiger', 'Tim', 140, 120, 8);

$fish1 = new fish('Clownfish', 'Nemo', 0.3, 3.5, 4);
$fish2 = new fish('Clownfish', 'Luc', 0.3, 3, 2);
$fish3 = new fish('Clownfish', 'Zizi', 0.2, 2.5, 1);
$fish_array = [$fish1, $fish2, $fish3];

$bear1 = new bear('Brown Bear', 'Misha', 250, 140, 10);
$bear2 = new bear('Brown Bear', 'Masha', 200, 120, 7);
$bear_array = [$bear1, $bear2];

$eagle1 = new eagle('Philippine Eagle', 'Roy', 5.5, 90, 14);

$flamingo1 = new flamingo('Pink Flamingo', 'Sara', 3, 120, 3);
$flamingo2 = new flamingo('Pink Flamingo', 'Lina', 3.5, 140, 5);
$flamingo3 = new flamingo('Pink Flamingo', 'Jack', 2.5, 100, 2);
$flamingo_array = [$flamingo1, $flamingo2, $flamingo3];

$lion1 = new lion('African Lion', 'Leon', 190, 200, 6);
$lion2 = new lion('African Lion', 'Leonella', 130, 120, 5);
$lion_array = [$lion1, $lion2];


//$tiger1->eat();



//$aquarium1->addAnimal($fish1);

//$aquarium1->getCharacteristics();

$employee1 = new employees('Ben', '25', 'male');

$employee2 = new employees('Judy', '30', 'female');

?>
