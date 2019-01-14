
<?php

$arr= array("Samreen"=>"31","Jahan"=>"41","Warisha"=>"39","Rania"=>"40");

asort($arr, SORT_STRING);

echo("---------------VALUE ASCENDING SORT-------------"."<br>");

foreach($arr as $key1 => $value1){
	echo($key1." ".$value1."<br>");
}

echo("<br>");

echo("---------------VALUE DESCENDING SORT-------------"."<br>");

$ds_val= arsort($arr, SORT_STRING);

foreach($arr as $key2 => $value2){
	echo($key2." ".$value2."<br>");
}

echo("<br>");

echo("---------------KEY ASCENDING SORT-------------"."<br>");

ksort($arr, SORT_STRING);

foreach($arr as $key3 => $value3){
	echo($key3." ".$value3."<br>");
}

echo("<br>");

echo("---------------KEY DESCENDING SORT-------------"."<br>");

krsort($arr, SORT_STRING);


foreach($arr as $key4 => $value4){
	echo($key4." ".$value4."<br>");
}

?>