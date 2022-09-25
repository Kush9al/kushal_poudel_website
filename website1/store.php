<?php 

include 'config.php';
error_reporting(0);

session_start();
if (!isset($_SESSION['username'])) {
    header("Location:login.php");
}
?>
<?php if (isset($_POST['buy'])) {
      echo "<script>alert('Purchased successfully.')</script>";
  }
    ?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Origin: Second Hand Phones Buying and Selling</title>
    <link rel="icon" type="image/x-icon" href="origin.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Smooch&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style1.css">
  </head>  
  <body>

  <?php include("navbar.php") ?>

  <section style="background-color: #eee;">
  <div class="text-center container py-5">
    <h4 class="mt-4 mb-5"><strong>Phone Store</strong></h4>
    

    <div class="row">
    <?php
    $query="SELECT * FROM phone_details";
    $query_run= mysqli_query($conn, $query);
    $check_data = mysqli_num_rows($query_run) > 0;
    if($check_data)
    {
      while($row = mysqli_fetch_assoc($query_run))
      {
        ?>
        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img width="50" height="300"src="<?php echo $row["image"]?>"
              class="w-100" />
            
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
     
              <h5 class="card-title mb-3"><?php echo $row["name"];?></h5>
            </a>
            <a href="" class="text-reset">
              <p><?php echo $row["category"];?></p>
            </a>
            <h6 class="mb-3">Price: Rs<?php echo $row["price"];?></h6>
            <p class="mb-3" style="height:60px"><?php echo $row["description"];?></p>
      
    <form method="POST" action=""><button id="buy" name="buy" class="btn btn-primary">BUY</button></form> 
      
     
          </div>
        </div>
      </div>
        <?php
      
    }
  
  }

  
    else{
      echo "No record found";
    }
  ?>
  
    </div>
  </div>
</section>

    <?php include("footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>