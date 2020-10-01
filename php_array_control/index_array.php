<?php

$data =["miftah","anang","udin"];

$musisi=implode("\n",$data); // array => string

//  echo $musisi;

 $musisi_arr=explode("\n",$musisi); //string => array

 
 array_push($data,"reza");  //menambah array paling balakang
 array_unshift($data,"rossa"); // menambah paling depan

 
 print_r($data);

//  remove elemen

array_pop($data);   // remove element from end menghapus paling belakang

array_shift($data); // remove elemen from bengin || menghapus paling depan
unset($data[0]);  //menghapus array
print_r($data); 

$data_baru=["via valen"];

$color=["red","green","blue"];

// $replace=array(0=>"magenta",2=>"cyan");
array_push($color,"Yellow");  //menambah array paling balakang
array_unshift($color,"Blak"); // menambah paling depan


array_splice($color,1,1,"megenta"); // replice red to magennta
array_splice($color,3,1,"cyen"); // replice red to cyen
unset($color[2]);   // remove to array two/2  mengambil
print_r($color);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1,2,"orange");
var_dump($input);


