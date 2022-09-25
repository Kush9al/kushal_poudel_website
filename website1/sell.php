<?php 

include 'config.php';
// error_reporting(0);
session_start();

if (!isset($_SESSION['username'])) {
    header("Location:login.php");
}
?>
<?php
if (isset($_POST['post'])) {
  $image = $_POST['image'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $description = $_POST['description'];	

 
  $query = "insert into phone_details (id, name, category, price, description, image) 
values (NULL, '$name', '$category', '$price', '$description', '$image')";
$conn->query($query);
}

if (isset($_POST['post'])) {
  echo "<script>alert('Post listed successfully.')</script>";
 
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Origin: Second Hand Phones Buying and Selling</title>
    <link rel="icon" type="image/x-icon" href="origin.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Smooch&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style1.css">
  </head>  
  <body>

<?php include("navbar.php") ?>

<hr>
<section>

<form method="POST" class="form-horizontal">
<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input type="text" id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required>
    
  </div>
</div>

<br>

<div class="form-group">
  <label class="col-md-4 control-label" for="price">PRODUCT PRICE</label>  
  <div class="col-md-4">
  <input type="number" id="price" name="price" placeholder="PRODUCT_PRICE" class="form-control input-md"  required >
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <input type="radio" name="category" value="android" required> <span>Android</span>
         <input type="radio" name="category" value="iphone" required > <span> Iphone </span>
</div>
</div>
<br>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">PRODUCT IMAGE</label>
  <div class="col-md-4">
    <input id="filebutton" name="image" class="input-file" type="file" required>
  </div>
</div>

<br>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="description"  required></textarea>
  </div>
</div>

<br>
 

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="post"></label>
  <div class="col-md-4">
    <button id="post" name="post" class="btn btn-primary">POST</button>
  </div>
  </div>

</fieldset>
</form>
</section>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>