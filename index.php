<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online store</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
<center> 
    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
           <h2> موقع تسويقى أونلاين</h2>
            <img src="logo.png" alt="logo" width="250px">
            <br>
            <input type="text" name="name">
            <br>
            <input type="text" name="price">
            <br>
            <input type="file" id="file" name="image"style="display:none;">
            <label for="file">اختيار صورة للمنتج</label>
            <button name ="upload"> رفع المنتج</button>
            <br>
            <a href="products.php">عرض كل المنتجات</a>
        </form>
    </div>
    <p>Developed by Ahmed Elghazaly</p>
</center>

</body>
</html>