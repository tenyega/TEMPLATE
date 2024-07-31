<?php

define('DATA', __DIR__);
//path to the file which we want to access.
$file_path = DATA . '/data.txt';

//mode a is add (adds at the end of the file with out overwriting any of the existing data)and write at the same time. 
$file = fopen($file_path, 'w');
var_dump($file);


//w is little serious coz this will overwite the data. 

//flock() is used to lock the file while being used by one of the user. so that to avoid overwriting by any other user
flock($file, LOCK_EX);

$txt = "Bonjour hi hello\n";
//to write inside the file 
fwrite($file, $txt);

$txt = "Bonsoir\n";
//to write inside the file 
fwrite($file, $txt);

//this is to release the file stream
flock($file, LOCK_UN);
// to close the file stream
fclose($file);
