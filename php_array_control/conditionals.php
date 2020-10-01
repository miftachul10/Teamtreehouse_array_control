<?php

$score=54;

if($score>=60){
    echo "you past the test"; // anda lulus tes
}elseif($score>50 && $score<=60){
    echo "Try Again"; // coba lagi
}else{
    echo "you fail the test"; // anda gagal tes
}

echo PHP_EOL;

$number=readline("Masukkan angka! :");

function grade()
{
    global $number;

    if( $number<=100 && $number>=96)
    {
        echo "A";
    }elseif($number<=95 && $number>=66)
    {
        echo "B";
    }elseif($number<=65 && $number>=61)
    {
        echo "C";
    }elseif($number<=60 && $number>=0)
    {
        echo "D";
    }else{
        echo "Pilih Angka 1-100 !!!";
    }
}
grade ();

// comepare

var_dump((1<>2)); //true
var_dump((1!=1)); //false

//identical

var_dump((1==="1")); // false

// not identical

var_dump((1==1)); //true


$nomor=999;

if($nomor>=10)
{
    if($nomor<=1000)
    {
        echo "you number is in range";
    }else{
        echo "you number is greater then 1000!";
    }
}else
{
    echo "your number is NOT in range";
}

echo PHP_EOL; 

if($nomor>=10 && $nomor<=1000)
{
    
    echo "you number is in range";
    
}else
{
    echo "your number is NOT in range";
}

var_dump (($nomor=true) || (false && true));

echo PHP_EOL; 

date_default_timezone_set("asia/jakarta");

switch (date("l"))
{
    case "Monday":
        echo "starting day";
    break;
    case "Tuesday":
        echo "Wash a car";
    break;
    case "Wednesday":
        echo "Holliday";
    break;
    case "Thurday":
        echo "Vacasion";
    break;
    case "Friday":
        echo "day off";
    break;
    case "Saturday":
        echo "Free day";
    break;
    case "Sunday":
        echo "Sleep";
    break;
    default:
    echo "long Holiday";
}




?>