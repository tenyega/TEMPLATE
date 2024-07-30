<?php
// All the parameters of configuration needs to be in at the top of our index page 

require('./config/config.php');

// require('../config/data.php');coz index.html is at same level of config thats why only ./
//Hrre the data is called here to include in our project here. 
require('./config/' . DATA);


//HEADER  OF THE ENTIRE PAGE
require('./inc/header.inc.php');

//HERO SECTION OF THE PAGE 
// $page = isset($_GET['pg']) ? $_GET['pg'] : 'home';
$page = $_GET['pg'] ?? 'home';
// echo $page;
require './page/' . $page . '.php';


//FOOTER FOR THE ENTIRE PAGE 
require('./inc/footer.php');
