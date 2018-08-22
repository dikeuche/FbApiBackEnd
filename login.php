<?php
    
    
    require_once "config.php";

    $redirectURL = "http://localhost/FaceBookLogin/fb-callback.php";
    $permissions = ['email'];
    $loginURL = $helper->getLoginUrl($redirectURL, $permissions);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
            <img src="img/d.png" ><br><br>
            <form action="">
                <input type="email" name="email" placeholder="Email" class="form-control"><br>
                <input type="password" name="password" placeholder="Password" class="form-control"><br>
                <input type="button" value="Log In" class="btn btn-primary">
                <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In with Facebook" class="btn btn-primary">

            </form>
            </div>
        </div>
    </div>
</body>
</html>