<?php

for ( $a=1; $a<=7; $a++){

	for( $b=1; $b<=7; $b++) {
         
         echo($a*$b."\r");

	}
	echo("<br>");
}


echo("<br>");
echo("--------------------New Task--------------------------------");
echo("<br>");
 
$num = 14595;  
$sum=0; $rem=0;

echo("The number is ".$num."<br>");  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  

  if($sum==24):
  	echo "It is your lucky day today" ;
  
  
 

echo("<br>");
echo("--------------------New Task--------------------------------");
echo("<br>");

  $a = 'A00';
 for( $i=0; $i<4; $i++){
 	echo("A0".$a+=1);
 	echo("<br>");
 }
 
?>