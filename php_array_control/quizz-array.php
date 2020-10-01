<?php
include "data_siswa.php";
/**
 * 29/09/2020
 * sorting array
 */

// $temp_arr=array();
// $filter_form="Magelang";
// $filter_next=false;


// foreach($data_siswa as $value)
// {
//     if($value[1]==$filter_form && $filter_next)
//     {
//         if($value[3]){
//             $lulus="Lulus";
//         }else{
//             $lulus="Belum lulus";
//         }
//             $temp_arr[]=[$value[0],$value[1],$lulus];
//     }
// }

// asort($temp_arr);
// print_r($temp_arr);

$temp_arr=[];
$city="Magelang";
$filter_lulus=false;
foreach($data_siswa as $value)
{
    if(($value[1]==$city && $value[3]==$filter_lulus) || ($city==="all" && $value[3]==$filter_lulus)) 
    {
        if($value[3])
        {
            $lulus="Lulus";
        }else{
            $lulus="Belum Lulus";
        }
        $temp_arr[]=[$value[0],$value[1],$lulus];
    }
}
asort($temp_arr);
// implode($temp_arr);
print_r($temp_arr);