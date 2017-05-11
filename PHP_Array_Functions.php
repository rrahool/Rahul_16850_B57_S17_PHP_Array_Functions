<?php

echo "<pre>";

/*array_key_exists()*/

$age = array("Rahim"=>43,"Karim"=>23,"Jorina"=>44);
$key = "Jorina";

if(array_key_exists($key,$age)){
    echo "The age of $key is ".$age[$key];
}
else echo "habijabi";


/////////////////
echo "<hr>";
/////////////////


/*array_key_flip()*/

//$testArray = array(23, 5, 15, 2, "hello", 34);
$testArray = array("Rahim"=>43,"Karim"=>23,"Jorina"=>44);

print_r($testArray);
echo "<br>";

$outputArray = array_flip($testArray);
print_r($outputArray);


/////////////////
echo "<hr>";
/////////////////

/*array_pad()*/

$input = array(12, 10, 9);

//$result = array_pad($input, 5, 0);
//// result is array(12, 10, 9, 0, 0)
//
//$result = array_pad($input, -7, -1);
//// result is array(-1, -1, -1, -1, 12, 10, 9)

$result = array_pad($input, 5, "noop");
print_r($result);


/////////////////
echo "<hr>";
/////////////////

/*array_push()*/

$testArray = array(23, 5, 15, 2, "hello", 34);
print_r($testArray);


echo array_push($testArray,"World","is not enough")."<br>";
print_r($testArray);


/////////////////
echo "<hr>";
/////////////////

/*array_keys()*/
/*works only for first dimensional array*/

$testArray = array(
    "Rahim"=>43,
    "Karim"=>23,
    "Jorina"=>44,
    array("Kamal"=>55,"Salman"=>24,"Jamal"=>30)
);

print_r($testArray);
echo "<br>";

$outputArray = array_keys($testArray);
print_r($outputArray);


echo str_repeat("<br>",10);


/////////////////
echo "<hr>";
/////////////////

/*array_sum()*/
/*works only for first dimensional array*/

$testArray = array(
    "Rahim"=>43,
    "Karim"=>23,
    "Jorina"=>44,
    array("Kamal"=>55,"Salman"=>24,"Jamal"=>30)
);
echo array_sum($testArray);
echo str_repeat("<br>",10);

/////////////////
echo "<hr>";
/////////////////

/*current()*/
/*conceptually pointer*/

$transport = array('foot', 'bike', 'car', 'plane');

$mode = current($transport); // $mode = 'foot';
$mode = next($transport);    // $mode = 'bike';
$mode = current($transport); // $mode = 'bike';
$mode = prev($transport);    // $mode = 'foot';
$mode = end($transport);     // $mode = 'plane';
$mode = current($transport); // $mode = 'plane';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }



echo str_repeat("<br>",10);

/////////////////
echo "<hr>";
/////////////////

/*each()*/

$age = array("Rahim"=>43,"Karim"=>23,"Jorina"=>44);
//var_dump(each($age));

$kvArray = each($age);
echo "[" . $kvArray["key"] . "]=> " . $kvArray["value"] . "<br>";

$kvArray = each($age);
echo "[" . $kvArray["key"] . "]=> " . $kvArray["value"] . "<br>";

$kvArray = each($age);
echo "[" . $kvArray["key"] . "]=> " . $kvArray["value"] . "<br>";


echo str_repeat("<br>",10);


/////////////////
echo "<hr>";
/////////////////


/*compact()*/













echo "</pre>";



















