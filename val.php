<?php
include('config.php');
$ID=$_GET['id'];
$up=mysqli_query($con, "SELECT * FROM prod WHERE id=$ID");
$data=mysqli_fetch_array($up);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fongts.googleapis.com/css?family=Trirong">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد شراءالمنتج</title>
    <style>
    input{
        display: none;

    }
    .main{
        width: 30%;
        padding: 20px;
        box-shadow: 1px 1px 10px silver:
        margin-top: 50px;
    }

    </style>
</head>
<body>
    <center>
    <div class="main">
    <form action="insert_cart.php" method="post">
     <h2>هل تريد تأكيد شراءالمنتج </h2>
     <input type="text" name="id" id="id" value="<?php echo $data['id'] ?>">
     <input type="text" name="name" id="name" value="<?php echo $data['name'] ?>">
     <input type="text" name="price" id="price" value="<?php echo $data['price'] ?>">
       <button name="add" type="submit" class="btn btn-warning"> تأكيد اضافة المنتج للعربة</button>
       <br>
       <a href="shop.php">الرجوع لصفحة المنتجات</a>
    </form>
  </div>
    </center>
    
</body>
</html>