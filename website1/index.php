
<?php
include 'config.php';
// error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
  $first = $_POST['first'];
  $last = $_POST['last'];
  $message = $_POST['message'];
 
  $query = "insert into contact (id, first, last, message) 
values (NULL, '$first', '$last', '$message')";
$conn->query($query);
echo "<script>alert('Message sent successfully.')</script>";}
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

<section class="main">
  <div class="container py-3">
    <div class="row py-5">
      <div class="col-lg-7 pt-5 text-center">
        <h1 class="pt-5">Buy and Sell Second Hand Phones Here !</h1>
        <button class="btn1 mt-3"><a style="color: #FFFFFF;
  text-decoration: none;"href="login.php"> Sign In</a></button>
      </div>
    </div>
  </div>
</section>
<style>
  .margin{
  margin:auto;
  }
  .textarea{
    width: 410px;
  }
  
  </style>
<section class="contact py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 m-auto text-center">
                    <h1>Contact Us</h1>
                    <h6 style="color: red;"> Be In Touch With Us.</h6>
                </div>
            </div>
            <div class="row py-5 margin">
                <div class="col-lg-3">
                    <div class="row py-3">
                        <div class="col-lg-8">
                            <h6>LOCATION</h6>
                            <P>Pokhara-14, Kaski</P>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <h6>PHONE</h6>
                            <P>+9779861728373</P>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <h6>EMAIL</h6>
                            <P>origin@gmail.com</P>
                        </div>
                    </div>
                  </div>
                 
                    <div class="col-lg-7 margin">
                    <form method="POST">
                        <div class="row">
                            <div class="col-lg-4 py-3">
                                <input type="text" class="form-control bg-light" placeholder="First Name" name="first">
                            </div>
                            <div class="col-lg-4 py-3">
                                <input type="text" class="form-control bg-light" placeholder="Last Name" name="last">
                            </div>
                            <div class="row">
                                <div class="col-lg-10 py-3">
                                    <textarea class="form-control bg-light textarea" cols="8" rows="4"
                                        placeholder="Enter your message" name="message"></textarea>
                                </div>
                            </div>
                            <button class="btn1" name="submit">Submit</button>
                        </div>
                        </form>
                    </div>
               
            </div>
        </div>
    </section>


    <?php include("footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>