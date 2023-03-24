<?php

 // $whatever = "satu/dua/tiga";
 // //$whatever = rtrim($whatever, "/");
 // //$whatever = filter_var($whatever, FILTER_SANITIZE_URL);
// 	$whatever = explode("/", $whatever);
 // return $whatever;

//var_dump("$whatever");
$string = "Saya/suka/makan/bakso/";
$arr_kata = explode ("/", $string);
$arr_kata2 = explode ("/", $string, 2);
 
print_r ($arr_kata); //Array ([0] => Saya [1] => suka [2] => makan [3] => bakso )
echo "<br/>";
print_r ($arr_kata2); //Array([0] => "Saya" [1] => "suka makan bakso")

// $string = "Saya suka makan bakso";
// $arr_kata3 = split(' +', $string);
 
// print_r($arr_kata3);
// //Array ( [0] => Saya [1] => suka [2] => makan [3] => bakso )
