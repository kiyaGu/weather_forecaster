<?php

$name ="kiya";
$c= "name";
$d="c";
$_do2 = "d";
echo $$$$_do2;
echo "<br/>";
$first = array("Kiya","is", "a good student");
print_r($first);
$second[0]="this is";
$second[1]="array";
echo "<br>";
print_r($second);
$third =array("first"=>"hello","second"=>"how are you");
echo "<br>";
print_r($third);
unset($second[0]);
echo "<br>";
print_r($second);
unset($name);
echo $name;
$name ="tola";
echo "<br>";
echo $name;
$second[]="new vale";
echo "<br>";
print_r($second);
echo "<br>";
foreach($third as $key => $value){
    echo "<h1>".$key.":"." ".$value."</h1>";
}
    echo mail("sdsdd","sdsdsd","dsdsds");
print_r($_GET);?>