<?php 

// $firstName='me';
// $lastName='you';
// $currenAverage=9;
// $finalAverage=12;
// $messageBody='';

// if(!$firstName || $lastName)
// {
//     echo "please enter a student Name !";
// }elseif($currenAverage>9 || $finalAverage<12)
// {
//     echo "This is only for highschool student,";
    
// }

// class koneksi{
//      public function __construct()
//      {
//          echo "otomatis terhubung dengan data base";
//      }
//     public function open()
//     {
//         echo "koneksi ke data base";
//     }
//     public function inputdata()
//     {
//         echo "user input data dan dikirim ke data base";
//     }
//     public function __destruct()
//     {
//         echo "koneksi ke data dihentikan";
//     }
//     public function __toString()
//     {
//         return " hello ";
//     }
// }

// $database=new koneksi();
 
// // echo $database;
// $database->inputdata();
echo "";
echo PHP_EOL;
echo __FILE__;
echo PHP_EOL;
echo __LINE__;
echo PHP_EOL;
echo  __DIR__;
echo PHP_EOL;
class Cars{
    public function tester()
    {
        echo __FUNCTION__."\n";
        echo __CLASS__."\n";
        echo __METHOD__. "\n";
    }
}
(new Cars())->tester();

echo base64_encode("data");
echo base64_decode("ZGF0YQ==");

// echo crypt("data".time()),;

echo password_hash("password",PASSWORD_BCRYPT);

var_dump(password_verify("password",'$2y$10$LucGutJeZzap21b3Z7CylewB/GH0NgsJfEuDXW3T7PAvvGM.WcUzu'));
