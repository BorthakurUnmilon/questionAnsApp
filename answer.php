<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

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
    $tt = false;
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `category` WHERE categoryid=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['categoryname'];
        $catdesc = $row['categorydisc'];
    }

    ?>

    <?php
    if (isset($_SESSION['loggedin'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tit = $_POST['title'];
            $des = $_POST['concern'];
            $sql = "INSERT INTO `thread`(`threadtitle`,`threaddesc`,`threadcatid`,`threadusid`,`threadstamp`) VALUES ('$tit','$des','$id','0',current_timestamp())";
            $result = mysqli_query($conn, $sql);
            $tt = true;
            if ($tt) {
                // $tttitle =$_POST['title'];
                // $tdesc=$_POST['desc'];

            }
        }
    } else {
    }
    ?>


    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4" style="color:blue;">welcome to <?php echo $catname; ?> Page</h1>
            <p class="lead"><?php echo $catdesc; ?></p>
            <hr class="my-4">
            <p>
            <ul style="color:blue;">
                <li>1. No Spam / Advertising / Self-promote in this website is allowed</li>
                <li>2.Do not cross post questions</li>
                <li>3.Using violent or aggrerasive and harsh word cosidered to be offensive</li>
                <li>4.Reamin respectful towards others</li>
            </ul>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>

    <h1 class="text-center">Answer Problem</h1>

    <div class="container">


        <form="" method='$_POST'>
            <div class="form-group">
                <label for="exampleInputEmail1" >Problem Titles</label>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"> </label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">post</button>
        </form>
    </div>
    <div class="container my-3">
        <h1>Browser Questions</h1>
        <?php

        $id = $_GET['catid'];
        // echo $id;
        $sql = "SELECT * FROM `thread` WHERE threadcatid=$id";
        $result = mysqli_query($conn, $sql);
        $got = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $got = false;
            $title = $row['threadtitle'];
            $desc = $row['threaddesc'];
            echo '<div class="media">
  <img class="mr-3" src="./images/generic_placeholder.jpg" width=60% alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0"> <a href="threads.php?threadid=' . $id . '">' . $title . ' </a></h5>
  ' . $desc . '
  </div>
</div>';
        }
        if ($got) 
        ?>


        <?php
    include 'footer.php';
        ?>





        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>