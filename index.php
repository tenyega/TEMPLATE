<?php
// All the parameters of configuration needs to be in at the top of our index page 

require('./config/config.php');




//HEADER  OF THE ENTIRE PAGE
require_once('./inc/header.inc.php');

//HERO SECTION OF THE PAGE 
// $page = isset($_GET['pg']) ? $_GET['pg'] : 'home';
$page = $_GET['pg'] ?? 'home';

// if (!$file_exists('./pages/' . $page . '.php')) {
// header('Location: index.php');
// require'./pages/404.php';
// exist();
//     $page = '404';
// }
// echo $page;



//ALternative: 2 
$authorizedPages = ['home', 'videos', 'about', 'contact', 'product'];
$page = in_array($page, $authorizedPages) ? $page : '404';
require './page/' . $page . '.php';

//FOOTER FOR THE ENTIRE PAGE 
require('./inc/footer.php');
