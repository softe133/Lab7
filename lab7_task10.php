<?php

$arr = range(200,250);

foreach($arr as $value){
if($value%4==0){
echo($value."<br>");
}
}

echo("<br>");
echo("--------------------new task--------------------------------");
echo("<br>");


$numeric = array(1,2,3,4,2,4,5,3,1);
$string = array("mouse","lion","cat","dog","lion","mouse","dog","cat","rabbit");

$sort_nu = array_unique($numeric,SORT_NUMERIC);
$sort_str = array_unique($string,SORT_STRING);

foreach( $sort_nu as $value1){
	echo($value1);
}

echo("<br>");

foreach( $sort_str as $value2){
	echo($value2."<br>");
}



echo("<br>"); 
echo("--------------------Random Number Array--------------------------------");
echo("<br>");

for ( $i=1; $i<=10;$i++) {
	$random[] = mt_rand(1, 200);
}

//echo($random);

foreach ($random as $result) {
	echo($result."    ");

}

$var= array_search(24,$random);
	if($var != null){
		echo("You have been found");
}

?>