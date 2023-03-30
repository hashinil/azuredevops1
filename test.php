<?php
include_once "classes/ClassBarn.php";
include_once "classes/ClassChicken.php";

$chicken  = new Chicken('omnivores');

echo '<h3><b>Chicken</b></h3> <br>';
echo 'Chickens are ' . $chicken->get_family() . '<br><br>';
echo 'We have ' . $chicken->add_animal() . ' chicken/s in the barn<br><br>';
echo 'We have ' . $chicken->add_animal() . ' chicken/s in the barn<br><br>';

$chicken->set_legs(2);
echo 'chicken has ' . $chicken->get_legs(2) . ' legs<br><br>';

$chicken->set_product('Eggg');
echo 'chicken gives ' . $chicken->get_product() . ' <br><br>';
?>