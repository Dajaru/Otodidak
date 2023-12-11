<?php
$name = "Eko";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n"; 

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";
// null merepresentasikan sebuah variable tanpa nilai bukan ada atau tidaknya variable
// null juga dapat mengosongkan data variable 
$contoh = "Eko";
unset($contoh);
// unset untuk bener bener ngapus variable dan g bisa dipake lagi dengan is_null
$contoh= "jod";

// maka ada baiknya menggunakan isset untuk mengecek ada atau tidak nya variable dan nilai
var_dump(isset($contoh));

