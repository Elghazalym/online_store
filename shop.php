<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fongts.googleapis.com/css?family=Trirong">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="index.css">

    <style>
        h3{
             font-family: "Sofia", sans-serif;
             font-weight: bold;
        }
        .card{
            float:right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;

        }
        .card img{
            width:100%;
            height:200px;
        }
        main{
             width=60%;
        }
        .#AA{
            margin-left: 70px;
            text-decoration:none;
            color:white;

        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a id ="AA" class="navbar-brand"href="cart.php">my cart</a>

    </nav>
<center>
<h3>جميع المنتجات المتوفرة</h3>
</center>

<?php
include('config.php');
$result =mysqli_query($con, "SELECT * FROM prod");
while($row=mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
     <div class='card' style='width: 18rem;'>
    <img src='$row[image]' class='card-img-top'>
    <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='val.php? id=$row[id]' class='btn btn-success'>اضافة المنتج للعربة </a>
  </div>
</div>
    </main>
    </center>
    ";
}
?>




</body>
</html>