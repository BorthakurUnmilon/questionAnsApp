<?php
$login=false;
$showerror=false;
$man=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  include 'connect.php';
  $uname =$_POST["uname"];
  $uemail =$_POST["umail"];
  $upass =$POST["upass"];
  $ucpass= $_POST["ucpass"];

  $sql="SELECT * FROM `user` WHERE sname='$uname'";
  $result=mysqli_query($conn,$sql);
  $num= mysqli_num_rows ( $result );
  if($num){
    $man=true;
  }
  else
  {
    if($upass==$ucpass)
    {
      $sql="INSERT INTO `user` (`sname`,`semail`,`spassword`,`stime`) VALUES ( 'uname','$uemail','$upass',current_timestamp())";
      $result=mysqli_query($conn,$sql);

      if($result){
        header("Location:lt/signin.html");
      }
    }
    else{
      $showerror=true;
    }
  }
}
?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sighn">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="sighn" tabindex="-1" aria-labelledby="sighnLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sighnLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="uname" aria-describedby="emailHelp">
  
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="upass">
  </div>
  
  <div class="mb-3">
    <label for="cpassword" class="form-label">confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="ucpass">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
