<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php    
include('config.php');
$ID =$_GET['id'];
$up= mysqli_query($con, "SELECT * FROM prod WHERE id=$ID");
$data =mysqli_fetch_array($up);
  ?>  
<center> 
    <div class="main">
        <form action="up.php" method="post" enctype="multipart/form-data">
           <h2> تعديل المنتجات</h2>
            <br>
            <input type="text" name="id" value='<?php echo $data['id']?>'>
            <br>
            <input type="text" name="name" value='<?php echo $data['name']?>'>
            <br>
            <input type="text" name="price" value='<?php echo $data['price']?>'>
            <br>
            <input type="file" id="file" name="image"style="display:none;">
            <label for="file">تحديث صورة المنتج</label>
            <button name ="update" type="submit"> تعديل المنتج</button>
            <br>
            <a href="products.php">عرض كل المنتجات</a>
        </form>
    </div>
    <p>Developed by Ahmed Elghazaly</p>
</center>

</body>
</html>