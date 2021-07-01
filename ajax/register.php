<?php
define('__CONFIG__',true);
require_once "../inc/config.php";



//If submitting to ajax
if($_SERVER['REQUEST_METHOD']=='POST')
{

$return=[];
    
// header("Content-Type:application/json");


$email =Filter::String( $_POST['email']);
//Make sure the user does not exist
$user_Found = findUser($con,$email);
//Make sure the user can be added

if($user_Found)
{
    $return['error']= "You Already have a account";
    $return['is_logged_in']=true;
}

else{

    $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
    $addUser= $con->prepare("INSERT INTO users(email,password) VALUES(LOWER(:email),:password)");
    $addUser->bindParam(':email',$email,PDO::PARAM_STR);
    $addUser->bindParam(':password',$password,PDO::PARAM_STR);
    $addUser->execute();

    $user_id= $con->lastInsertId();

    $_SESSION['user_id']= (int) $user_id;

    $return['redirect']= 'dashboard.php';
    //$return['is_logged_in']=true;
   
}
//Return the proper intformation back to javascript to redirect us.

echo json_encode($return,JSON_PRETTY_PRINT);exit;

}
else{

    exit('Invalid URL');
}

?>