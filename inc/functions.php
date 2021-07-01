<?php
function ForceLogin()
{
if(isset($_SESSION['user_id']))
{

    
    //the user is allowed here
}
else{
    //the user is not allowed here
    header("Location:login.php");
    exit;
}
}

function ForceDashboard(){
    if(isset($_SESSION['user_id'])){
        header("Location:dashboard.php"); exit;
    }
    else{
    
    }
}
?>