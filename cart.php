<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fongts.googleapis.com/css?family=Trirong">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربة|المنتجات</title>
    <style>
   main{
    width: 40%;
    margin-top: 30px;
   }

   table{
    box-shadow: 1px 1px 10px silver;
 
   }

   thead{

    background-color: blue;
    color: white;
    text-align: center;
   }
   tbody{
    text-align: center;
   }

    </style>
   

</head>
<body>
    <center>
         <h3>منتجاتك المحجوزة </h3>
    </center>
   
<?php
include('config.php');
$result =mysqli_query($con, "SELECT *FROM addcard");
while( $row=mysqli_fetch_array($result )){
  
    echo "<center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>product name</th>
                        <th scope='col'>product price</th>
                        <th scope='col'>delete product</th>
 

                    </tr>
                </thead>
            <tbody>  
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><a href='del_cart.php? id=$row[id]' class ='btn btn-danger'>ازالة</a></td>
                </tr>
  
            </tbody>
            </table>
        
        </main
    </center>
       ";
    }
?>
<center>
    <a href="shop.php">الرجوع لصفحة المنتجات</a>
</center>
    
</body>
</html>