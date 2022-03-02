<?php
$str = $_GET['st'];
$delimiter = $_GET['sp'];

$words = explode($delimiter,$str);

foreach($words as $word)
{
    echo $word;
    echo "<br>";
}
echo "<br>";
echo "<br>";

echo str_replace("$delimiter","*","$str");

?>