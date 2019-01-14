<?php

$numeric = array(5,90,85,63);

$r = array_reverse($numeric,true);
array_pop($r);
array_push($r,"$","*","@");

foreach($r as $value){
echo($value."<br>");
}


echo("<br>");
echo("--------------------new task--------------------------------");
echo("<br>");


$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),"numbers" => array ( 1, 2, 3, 4, 5, 6 ),"holes" => array ( "First", 5 => "Second", "Third"));


	echo($color["holes"][0]."<br>".$color["color"]["c"]."<br>".$color["numbers"][1]);
		

?>