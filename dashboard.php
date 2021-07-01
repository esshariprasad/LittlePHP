<?php
define('__CONFIG__',true);

require_once "inc/config.php";
ForceLogin();

$user_id = $_SESSION['user_id'];

$getUserInfo = $con->prepare("SELECT email,reg_time FROM users where user_id = :user_id LIMIT 1");
$getUserInfo->bindParam(':user_id',$user_id,PDO::PARAM_INT);
$getUserInfo->execute();

if($getUserInfo->rowCount()==1)
{
    //user was found
    $User = $getUserInfo->fetch(PDO::FETCH_ASSOC);
}
else{
    header("Location:logout.php"); exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="uk-section uk-container">
        Dashboard here<?php echo  " signed in as user ".$user_id?>
    </div>
    <p>Hello <?php echo $User['email']?> , you registered at <?php echo $User['reg_time'] ?></p>
    <a href="logout.php"><br>logout</a>

</body>
</html>



</body>
</html>