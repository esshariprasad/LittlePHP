<?php
define('__CONFIG__',true);

require_once "inc/config.php";
Page::ForceLogin();

$user_id = $_SESSION['user_id'];

$User = new User($_SESSION['user_id'])
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
    <p>Hello <?php echo $User->email?> , you registered at <?php echo $User->reg_time ?></p>
    <a href="logout.php"><br>logout</a>

</body>
</html>



</body>
</html>