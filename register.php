<?php 
define('__CONFIG__',true);
require_once "inc/config.php"; 
Page::ForceDashboard();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/css/uikit.min.css" />

</head>
<body>

<div class="uk-section uk-container ">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid">
        <form class="uk-form-stacked js-register">
        <h2>Register</h2>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text" >Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="email" placeholder="email@email.com">
                </div>
            </div>
        
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-select">Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="password" placeholder="Your password">
                </div>
            </div>
        
            <div class="uk margin uk-alert-danger js-error" style="display:none";>
                test
            </div>
            <div class="uk-margin">
                <button class="uk-button-default uk-button" type="submit">Login</button>
                </div>
            </div>
        
        </form>    
    </div>
</div>
<?php require_once "inc/footer.php"?>

</body>
</html>