<?php
define('__CONFIG__',true);

require_once "inc/config.php";
ForceLogin()
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
        Dashboard here<?php echo  " signed in as user ".$_SESSION['user_id'];?>
    </div>

</body>
</html>



</body>
</html>