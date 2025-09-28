<?php
include('config.php');
$ID=$_GET['id'];
$up = mysqli_query($con,"select * from prod where id=$ID");
$data = mysqli_fetch_array($up);

?>
<!DOCTYPE html>
<html lang="en">
<head><link href="bootstrap.min.css" rel="stylesheet"><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاكيد شراء المنتج</title>
    <style>
        input{
            display:none;

        }
        .main{
            width: 30%;
            padding: 20px;
            box-shadow: 1px 1px 10px silver;
            margin-top:50px; ;    
        }
    </style>
    
   
</head>
<body>
    <center>
        <div class="main">
        <form action="insert_card.php" method="post">
            <h2>هل فعل تريد شراء المنتج</h2>
            <input type="text" name="id" value='<?php echo $data['id'] ?>' >
            <input type="text" name="name" value='<?php echo $data['name'] ?>' >
            <input type="text" name="price" value='<?php echo $data['price'] ?>' >
            <button name="add" type="submit" class="btn btn-warning">تاكيد اضافه المنتج الي العربه</button>
            <br>
            <a href="shop.php">الرجوع الي صفحه المنتجات</a>
        </form>
        </div>
    </center>
</body>
</html>