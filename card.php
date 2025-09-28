<!DOCTYPE html>
<html lang="en">
<head>
    <link href="bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربتي | منتجاتي</title>
    <style>
        h3{
            font-family:'cairo', sans-serif;
            font-weight:bold;

        }
        main{
            width: 40%;
            margin-top:30px;

        }
        table{
            box-shadow: 1px 1px 10px silver;

        }
        thead{
            background-color: blue;
            color:white;
            text-align:center;

        }
        thead{
            text-align:center;
        }

    </style>
</head>
<body>
    <center>
    <h3>
        منتجاتك المحجوزه

    </h3>
    </center>
   <?php
   include('config.php');
   $result= mysqli_query($con, "SELECT * FROM addcard");
   while($row =mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>product name</th>
                    <th scope='col'>product price</th>
                    <th scope='col'>Delet product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>ازاله</a></td>
                </tr>
            </tbody>

        </table>
    </main>
   </center> 
    "
   ;}
   ?>
   <center>
    <a href="shop.php">الرجوع لصفحه المنتجات</a>
   </center>
</body>
</html>