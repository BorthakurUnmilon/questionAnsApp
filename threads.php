
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Practice</title>
</head>

<body>
    <?php 
include 'header.php';
?>
    <?php 
include 'connect.php';
?>
    <?php
$id= $_GET['threadid'];
$sql="SELECT * FROM `thread` WHERE threadid=$id";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
  

    $id=$row['threadid'];
    $title=$row['threadtitle'];
    $desc=$row['threaddesc'];
}


?>
    <?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$tit=$_POST['comment'];

$sql="INSERT INTO `comment` (`cmdcnt`, `cmdid`, `cmdtime`, `commmentby`) VALUES ('$tit', '$id', '2021-08-31 20:44:18.000000', '0')";
$result=mysqli_query($conn,$sql);
    $tt=true;
    if($tt)
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }

}
?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4"> </h1>
            <p class="lead"></p>
            <hr class="my-4">
            <p>
            <ul>
                <li>No Spam / Advertising / Self-promote in the forums</li>
                <li>Do not post copyright-infringing material.</li>
                <li>Do not post “offensive” posts, links or images.</li>
                <li> Do not cross post questions. </li>
                <li> Do not PM users asking for help. </li>
                <li> Remain respectful of other members at all times.</li>
                </p>
            </ul>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>


    <!-- displaying the question of the thread  --> -->
    <div class="container">
        <h1>Post comment</h1>
        <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST">

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Type your Cmment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Post comment</button>
        </form>
    </div>



    <div class="container">

        <h1>Discuss!</h1>
        <?php 
$id= $_GET['threadid'];
$sql="SELECT * FROM `comment` WHERE cmdid=$id";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $id=$row['cmdid'];
   $content=$row['cmdcnt'];
   $contentdate=$row['cmdtime'];
   
echo '<div class="media">
  <img class="mr-3" src="l.png" width="65px" alt="Generic placeholder image">
  <div class="media-body">
   <p>Anonymous user at ' . $contentdate . '</p>
    ' . $content . '
  </div>

</div>';


}
?>
    </div>



    <?php
include 'footer.php'
?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>






<!-- <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Practice</title>
</head>

<body>
    <?php 
include 'header.php';
?>
    <?php 
include 'connect.php';
?>
<?php
$id1 = $_GET['threadid'];
$sql ="SELECT * FROM `thread` WHERE threadid=$id1"; 
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
$catname=$row['threadtitle'];
}

?>
    


<div class="container my-4">
<div class="container my-4">
<div class="jumbotron">
  <h1 class="display-4"><?php echo $catname; ?>  forums</h1>
  <p class="lead"><?php echo $catname ?> reserves some special characters for acting as operators. Every operator carries out some operation such as addition, multiplication to manipulate data and variables. The variables passed as input to an operator are</p>
  <hr class="my-4">
  <p>1. No Spam / Advertising / Self-promote in the forums. These forums define spam as unsolicited advertisement for goods, services and/or other web sites, or posts with little, or completely unrelated content. Do not spam the forums with links to your site or product, or try to self-promote your website, business or forums etc.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</div></div>

<div class="container my-3">
    <h1>Discussion</h1>
    
    
    </div>
    
    
    
     <?php
$id1 = $_GET['threadid'];
$sql = "SELECT * FROM `thread` WHERE threadid=$id1"; 
$result = mysqli_query($conn, $sql);
$noResult=true;
while($row = mysqli_fetch_assoc($result)){
    $noResult=false;
    $id=$row['threadid'];
    $title=$row['threadtitle'];
$desc=$row['threaddesc'];


echo '<div class="media">
  <img class="mr-3" src="th.jpg" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0"> <a href="threads.php">' . $title . ' </a></h5>
  ' . $desc . '
  </div>
</div>
</div>';
}
if($noResult)
{
    echo '<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">No Result Found</h1>
      <p class="lead">BE the first person to ask the question.</p>
    </div>
  </div>';


}
?>   
  
    <?php
include 'footer.php';
?>
    
 

  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html> -->