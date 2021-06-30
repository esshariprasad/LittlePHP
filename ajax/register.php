<?php
define('__CONFIG__',true);
require_once "../inc/config.php";



//If submitting to ajax
if($_SERVER['REQUEST_METHOD']=='POST')
{

$return=[];
    
header("Content-Type:application/json");

$return=[];
//Make sure the user does not exist

//Make sure the user can be added

//Return the proper intformation back to javascript to redirect us.

$return['redirect']= 'index.php?this-was-a-redirect';

echo json_encode($return,JSON_PRETTY_PRINT);exit;
}
else{

    exit('test');
}

?>