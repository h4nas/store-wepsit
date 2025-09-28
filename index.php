<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Online</title>
    <!-- Bootstrap CSS -->

    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #4ffec4ff, #00f2fe);
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .main {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 90%;
            margin-top: 50px;
        }
        form h2 {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 20px;
        }
        form img {
            display: block;
            margin: 0 auto 20px auto;
            border-radius: 10px;
            max-width: 100%;
            height: auto;
        }
        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        
        form label {
            display: inline-block;
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        form label:hover {
            background: #0056b3;
        }
        form button {
            background: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        form button:hover {
            background: #218838;
        }
        form a {
            display: inline-block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }
        form a:hover {
            color: #0056b3;
        }
        form p {
            margin-top: 20px;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>موقع تسويقي أونلاين</h2>
                <!-- صورة SVG مدمجة كحقيبة تسوق -->
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64' fill='none'%3E%3Crect x='12' y='20' width='40' height='36' rx='4' ry='4' fill='%23f9a826'/%3E%3Cpath d='M52 20v8H12v-8a4 4 0 0 1 4-4h32a4 4 0 0 1 4 4z' fill='%23f39c12'/%3E%3Cpath d='M24 16v4a2 2 0 0 1-4 0v-4a4 4 0 0 1 8 0v4a2 2 0 0 1-4 0v-4zM44 16v4a2 2 0 0 1-4 0v-4a4 4 0 0 1 8 0v4a2 2 0 0 1-4 0v-4z' fill='%23fff'/%3E%3Crect x='12' y='40' width='40' height='16' rx='4' ry='4' fill='rgba(0,0,0,0.1)'/%3E%3Ccircle cx='24' cy='36' r='2' fill='%23fff'/%3E%3Ccircle cx='40' cy='36' r='2' fill='%23fff'/%3E%3C/svg%3E" alt="Shopping Bag">
                <!-- حقول الإدخال -->
                <input type="text" name="name" placeholder="اسم المنتج">
                <input type="text" name="price" placeholder="سعر المنتج">
                <input type="file" id="file" name="image" style="display:none;">
                <label for="file">اختيار صورة للمنتج</label>
                <button name="upload">رفع المنتج</button>
                <a href="products.php">عرض جميع المنتجات</a>
                
            </form>
        </div>
    </div>
    <p>Developer By (ANAS NABIL & ANAS MAHYOBE)</p>

    <!-- Bootstrap JS -->
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
