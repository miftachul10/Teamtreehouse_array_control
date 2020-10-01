<?php
$fatc=[
    57=>"on heinz ketchup bottles represents",
    2=>"is the approximate hours a day",
    18=>" is the average hours",
    10=>"per cen of the world",
    11=>"empire state building",
    98=>" % of the attoms",
    69=>"lorem ipsum dolor",
];

for($a=1; $a<=100;$a++)
{
       if(isset($fatc[$a]))
       {
           echo $a;
           echo $fatc[$a],"\n";
       }else{
           echo $a,"\n";
       }

}

// for($i=1; $i<=100; $i++)
// {
//     if(isset($fatc[$i])){
//         echo $i;
//         echo $fatc[$i];
//     }else{

//         echo $i,"\n";
//     }
// }
$nama="miftah aja";
var_dump(isset($nama));
