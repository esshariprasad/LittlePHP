    <?php

    if(!defined('__CONFIG__')) {
        exit('You do not have a config file');
    }

    class Page{

        
    static function ForceLogin()
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

    static function ForceDashboard(){
        if(isset($_SESSION['user_id'])){
            header("Location:dashboard.php"); exit;
        }
        else{
        
        }
    }

    function FindUser($con,$email,$return_assoc = false) {
        $email = (string) Filter::String($email);
        $findUser = $con->prepare("SELECT user_id,password FROM users where email=LOWER(:email) LIMIT 1");
        $findUser->bindParam(':email',$email,PDO::PARAM_STR);
        $findUser->execute();

        if($return_assoc)
        {
            return $findUser->fetch(PDO::FETCH_ASSOC);
        }

        $user_found = (boolean) $findUser->rowCount();

        return $user_found;
    }

    }

    ?>