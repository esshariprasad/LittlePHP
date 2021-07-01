<?php
define('__CONFIG__',true);
require_once "../inc/config.php";
require_once "../inc/classes/Filter.php";



//If submitting to ajax
if($_SERVER['REQUEST_METHOD']=='POST')
{

$return=[];
    
// header("Content-Type:application/json");


$email =Filter::String( $_POST['email']);
//Make sure the user does not exist
$password=$_POST['password'];



$user_Found = findUser($con,$email,true);

if($user_Found)
{
   //user exists
   
   $user_id= (int)$user_Found['user_id'];
   $hash=(string)$user_Found['password'];
   
   if(password_verify($password,$hash))
   {
    $return['is_logged_in']=true;
    $_SESSION['user_id']= (int) $user_id;
    $return['redirect']= 'dashboard.php?message_welcome';
    
   }
   else{
       $return['error']="Invalid user email/password combo";
   }

    echo json_encode($return,JSON_PRETTY_PRINT);exit;
    
}

else{

    
    
    //$return['is_logged_in']=true;
   
}
//Return the proper intformation back to javascript to redirect us.
$return['error']= 'No account please signup';
    
echo json_encode($return,JSON_PRETTY_PRINT);exit;

}
else{

    exit('Invalid URL');
}

?>