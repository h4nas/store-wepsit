<!DOCTYPE html>
<html lang="en">
<head><link href="bootstrap.min.css" rel="stylesheet"><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنتجات</title>
    <link href="index.css" rel="stylesheet">
    <style>
      h3{
        font-family:'cairo',sans-serif ;
        font-weight:bold;
      }
      .card{
        float:right;
        margin-top:20px;
        margin-left:10px;
        margin-right:10px;

      }
      .card img{
        width: 100%;
        height: 200px;
      }
      main{
        width: 60%;

      }
      .card-body a {
            display: inline-block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }
      </style>
</head>
<body>
   <center>
    <h3>جميع المنتجات المتوفره</h3>
   </center>
   <?php
   include('config.php');
   $result = mysqli_query($con,"SELECT * FROM prod");
   while($row = mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
    <div class='card' style='width: 15rem;'>
        <img src='$row[image]' class='card-img-top'>
        <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price]</p>
            <a href='delete.php? id=$row[id]'  class='btn btn-danger'>حذف منتج</a>
            <a href='updata.php? id=$row[id]' class='btn btn-primary'>تعديل منتج</a>
    </div>
   </div>
</main>
<center>
    ";
   }
   ?>
  
</body>
</html>