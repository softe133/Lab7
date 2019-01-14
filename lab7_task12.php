<?php

/*for( $i=1; $i<=50; $i++){
	
	if( $i%3==0 && $i%5==0){
		echo($i." starstruck"."<br>");
	}

	elseif( $i%3==0 && $i%5!=0){
		echo( $i." star"."<br>");
	}

	elseif( $i%5==0 && $i%3!=0){
		echo( $i." struck"."<br>");
	}
}

echo("<br>");*/
echo("--------------------new task--------------------------------");
echo("<br>");

$name= "NATO";

echo("The word is ".$name."<br>");

$arr = str_split($name);

for ( $i=0; $i<count($arr); $i++) {
	
	if( $arr[$i]=="N") {
	echo($arr[$i]." =NORTH");
	echo("<br>");
       }

       elseif( $arr[$i]=="A") {
	echo($arr[$i]." =ATLANTIC");
	echo("<br>");
       }

       elseif( $arr[$i]=="T") {
	echo($arr[$i]." =TREATY");
	echo("<br>");
       }

       elseif( $arr[$i]=="O") {
	echo($arr[$i]." =ORGANIZATION");
	echo("<br>");
       }
}

?>