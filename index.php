<?php

function solution ($n, $ratings)
{
$rating = array();
$values = array();
$k = array();
	foreach($ratings as $key => $val){
		array_push($values,$val[0]);
		array_push($rating,$val[1]);
	}
	$max = max($rating);
	$k = array_keys($rating,$max,false);
	return min($values);
}

$n = readline();

$ratings = [array(512,2),array(123,3),array(987,6),array(123,5),array(69,6)];
$out_ = solution($n, $ratings);
echo $out_;
echo "
";
