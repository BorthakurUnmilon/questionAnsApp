<?php

include 'connect.php';

if($conn){
	// echo "Connnnnnnected";
}else{
	echo "Not connected";
}

// $login=false;
// $showerror=false;
// $man=false;
if(isset($_POST["register"]))
{

	// echo "login";
  
  $uname =$_POST["uname"];
  $uemail =$_POST["umail"];
  $upass =$_POST["upass"];
  $ucpass= $_POST["ucpass"];

//   $sql="SELECT * FROM `user` WHERE name='$uname'";
//   $result=mysqli_query($conn,$sql);
//   $num= mysqli_num_rows ( $result );
//   if($num){
//     $man=true;
//   }
//   else
//   {
//     if($upass==$ucpass)
//     {
      $sql="INSERT INTO `user` (`name`,`email`,`password`) VALUES ( '$uname','$uemail','$upass')";
      $result=mysqli_query($conn,$sql);

      if($result){
        header("Location:signin.html");
      }else{
	      echo mysqli_error();
      }
//     }
//     else{
//       $showerror=true;
//     }
//   }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>signup</title>
	<link rel="stylesheet" href="sign.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'black');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
	</script>
</head>
<title>signup</title>
<body>
	<form action=" " method="POST">
	
	<div class="signup">
	<h1>Signup</h1>
		
	<div>
	<label class="name" for="name">Enter your name: </label>
	<input id="name" type="text" placeholder="Your name" name="uname" required>
	</div>
	<div>
	<label class="email" for="mail">Enter a valid email id:</label>
	<input id="mail" type="email" placeholder="Enter your mail" name="umail" checked required>
	<div>
		<label>password :
			<input name="upass" id="password" type="password"  checked required minlength="6" maxlength="10" placeholder="password"/>
		    </label>
	</div>
	</div>
	<div>
	<label>confirm password:
	<input type="password" name="ucpass" id="confirm_password" />
	<span id='message'></span>
	</label>
	</div>
	<div>
	<label class="poh" for="phone">Enter your phone number:</label>
	<input id="phone" type="text" placeholder="phone no." name="phonenumber" checked required>
	</div>
		<input type="submit" name="register" value="Register"/>
	</div>
	</form>
	
</body>
</html>