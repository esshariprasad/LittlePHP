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
$findUser = $con->prepare("SELECT user_id,password FROM users where email=LOWER(:email) LIMIT 1");
$findUser->bindParam(':email',$email,PDO::PARAM_STR);
$findUser->execute();
//Make sure the user can be added

if($findUser->rowCount() ==1 )
{
   //user exists
   $User= $findUser->fetch(PDO::FETCH_ASSOC);
   $user_id= (int)$User['user_id'];
   $hash=(string)$User['password'];
   
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