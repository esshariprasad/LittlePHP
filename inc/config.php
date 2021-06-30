<?php
// if there no constant defined , do not load the file
    if(!defined('__CONFIG__')){
        exit('You dont have config file');
    }

//for security

//allow errors
error_reporting(-1);
ini_set('display_errors','On');

//include DB files
include_once "classes/DB.php";
$con= DB::getConnection();
//classname::function_name
?>