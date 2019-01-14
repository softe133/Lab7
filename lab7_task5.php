<?php

even: for($a=0;$a<11;){
	echo "$a"."<br>";
	$a+=2;
}

goto odd;

odd: for($b=1;$b<10;){
	echo "$b"."<br>";
	$b+=2;
}

?>