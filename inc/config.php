<?php
// if there no constant defined , do not load the file
    if(!defined('__CONFIG__')){
        exit('You dont have config file');
    }

//for security

include_once "classes/DB.php";
$con= DB::getConnection();
//classname::function_name
?>