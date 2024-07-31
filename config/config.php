<?php
// This file should contains all the defination of configuration needed for our website .

define('DATA', 'data.php');
// require('../config/data.php');coz index.html is at same level of config thats why only ./
//Hrre the data is called here to include in our project here. 

require_once('./config/' . DATA);
define('DATAJSON',__DIR__. '/data.json');


function getArticles()
{
    $data = json_decode(file_get_contents(DATAJSON), true);
    return $data;
}
