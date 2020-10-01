<?php

$iceCream=[
    "Mifta"=>"Blak Chery",
    "Anang"=>"Chocolate",
    "Rimba"=>"Cookies and Cream",
    "Reza"=> "Strobery",
    "aku"=> true,
    "saya"=> 12,
    "kamu"=> 3.435,
    "1"=> "satu",
    true => "benar",
    2.8 => "dua"
];

print_r($iceCream);
//function array

$task1=array(
    "satu"=>"angka satu",
    "dua"=> "angka dua",
    "tiga"=> true
);
$task2=array(
    "satu"=>"angka empat",
    "lima"=> "angka lima",
    "enam"=> false
);
$task3="semua aja";
$todo=array($task1,$task2,$task3);
echo $todo[0]["satu"];
echo PHP_EOL;
echo $todo[2];


$baru=[
    "Miftah"=>["Miftachul Rohman","Magelang"],
    "anang"=>["Anang Syah Amirul","Jepara"],
    "Rendi"=>["Rendi Syaputra","Magelang"]
];
// foreach($baru as $a => $b)
// {
//     echo $baru[0];
// }
echo $baru[1];


?>