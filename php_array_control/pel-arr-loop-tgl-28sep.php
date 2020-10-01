<?php
// -sorting array
$learn=["satu","dua","tiga","empat","lima"];
$learn[]="enam";
array_push($learn,"tujuh");
array_unshift($learn,"delapan","sembilan");
unset($learn[1],$learn[2]);
asort($learn);
sort($learn);
rsort($learn);
ksort($learn);
krsort($learn);
// print_r($learn);


// loop (while)

$currenyear=date("Y");
$year = $currenyear -10;


// while($year <= $currenyear){
//     echo $year,"\n";
//     $year++;
// }

// do{
//     echo $year,"\n";
    
// }while(++$year <= $currenyear);

// list untuk memangil key

// $data=["satu","dua","tiga","empat"];
// $count=0;
// while((list($satu,$dua) = $data) && $count++ <1)
// {
//     echo $satu,"\n",$dua;
// }

// list($diti,$doto,$dewa)=$data;

// echo $diti;

// $player1=0;
// $player2=5;
// $round=0;
// var_dump($player1-$player2);
// var_dump(abs($player2-$player1));

// 

// for loop




// $currenyear=date("Y");


// for($year = date("Y")-10;$year<=date("Y");$year++)
//     {
//         echo $year."\n";
//     }

// for($a=date("Y") -12;$a<= date("Y");$a++)
//     {
//         echo $a."\n";
//     }

// echo PHP_EOL;

// $learn=["satu","dua","tiga","empat","lima"];
// $learn[]="enam";
// array_push($learn,"tujuh");
// array_unshift($learn,"delapan","sembilan");
// asort($learn);
// sort($learn);

// for($i=0; $i<count($learn); $i++)
// {
//     // echo $learn[$i]."\n";
// }


// isset mengecek ada atau tidak isi dari variabel
$data=" ";

var_dump(isset($data));

var_dump(empty($data));

// todo 

