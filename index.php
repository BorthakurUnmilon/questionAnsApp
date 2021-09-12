<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>question and answer</title>
</head>

<body>
    <?php 
include 'header.php';
?>
    <?php 
include 'connect.php';
?>

    <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1400x400/?mobile,iphone" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x400/?mobile,oneplus" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x400/?mobile," vivo" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
 -->





    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">QNA -website</h2>
        <div class="row my-4" >
            <!-- Fetch all the categories and use a loop to iterate through categories -->
            <?php 
         $sql = "SELECT * FROM `category`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          $id=$row['categoryid'];
          $lp=$row['categoryname'];
          $desc = $row['categorydisc'];
          // echo $row['category_id'];
          // echo $row['category_name'];
          // $id = $row['category_id'];
          // $cat = $row['category_name'];
          // $desc = $row['category_description'];
          echo ' 
          <div class="col-md-3" style="padding-bottom: 20px">
          <div class="card">
          <img src="https://source.unsplash.com/500x500/?code,java" class="card-img-top" alt="...">
          <div class="card-body">
 




          <h5 class="card-title"><h3>' . $lp . '</h3></h5>
          <p class="card-text">' . substr($desc,0,20) . '</p>
<pre>
<a href="thread.php?catid=' . $id . '" class="btn btn-outline-primary">Post</a>   <a href="answer.php?catid=' . $id . '" class="btn btn-primary">Answer</a>
</pre>
                      </div>
                  </div>
                </div>';
         } 
         ?>


        </div>
    </div>
  

 

  

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