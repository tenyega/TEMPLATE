<?php
//starting the session 
session_start();

//unsets all the varaibles of the session

//destroys the session completely 
$_SESSION['msg'] = "Deconnection reussi";
header('Location:login.php');
exit();
