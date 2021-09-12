<?php
$login=false;
$showpassword=false;

include 'connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $uname=$_POST["uname"];
    $upass=$_POST["upass"];

    $sql="SELECT * FROM `user` WHERE name='$uname' AND password='$upass'";
    $result=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);
    if($result)
    {
        header("Location: index.php");
        // echo "Logged in";

        session_start();
        // $_SESSION['loggedin']=true;
        $_SESSION['userid']=$uname; 
       }else{
        //    echo mysqli_error();
        echo "Error";
       }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="signin.css" rel="stylesheet">
    <title>Signin</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form action="" class="box" method="POST">
                        <h1>signin</h1>
                        <p class="text-muted"> Please enter your login and password!</p> 
                        <input type="text" name="uname" placeholder="Username"> 
                        <input type="password" name="upass" placeholder="Password"> 
                        <a class="forgot text-muted" href="#">Forgot password?</a> 
                        <input type="submit" name="login" value="signin" />
                        <div class="col-md-12">
                            <ul class="social-network social-circle">
                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




