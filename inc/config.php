<?php
// if there no constant defined , do not load the file
    if(!defined('__CONFIG__')){
        exit('You dont have config file');
    }

//for security

//allow errors
error_reporting(-1);
ini_set('display_errors','On');


//Sessions are always turned on

if(!isset($_SESSION))
{
    session_start();
}

//include DB files
include_once "classes/DB.php";
include_once "classes/Filter.php";

include_once "classes/User.php";
include_once "classes/Page.php";


//classname::function_name
?>