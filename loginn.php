<?php
$lifetime=30 * 24 * 60 * 60;
session_set_cookie_params($lifetime);

session_start(); // بدء الجلسة

// استدعاء الاتصال بقاعدة البيانات
include 'config.php';

// إذا تم إرسال البيانات من النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // قراءة البريد الإلكتروني وكلمة المرور من النموذج
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // كتابة استعلام SQL لجلب المستخدم بالبريد الإلكتروني
    $query = "SELECT * FROM myaccounts WHERE email = '$email'";
    $result = mysqli_query($con, $query);

    // التحقق مما إذا كان المستخدم موجودًا
    if ($result && mysqli_num_rows($result) > 0) {
        // استخراج بيانات المستخدم
        $user = mysqli_fetch_assoc($result);

        // التحقق من كلمة المرور
        if ($user['password'] === $password) {
            // تخزين البريد الإلكتروني في الجلسة
            $_SESSION['email'] = $user['email'];

            // توجيه المستخدم إلى المتجر
            header("Location: shop.php");
            exit;
        } else {
            $error_message = "كلمة المرور غير صحيحة.";
        }
    } else {
        $error_message = "البريد الإلكتروني غير موجود.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #007BFF, #FF6F61);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            gap: 30px;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.4);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            padding: 20px;
            text-align: center;
            width: 300px;
            box-shadow: 0 8px 20px rgba(4, 0, 0, 0.2);
        }

        .login-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #fff;
        }

        .login-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #ff6f61;
            color: #fff;
            font-size: 19px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-box button:hover {
            background: #007bff;
        }
        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #ff6f61;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-box input[type="submit"]:hover {
            background: #007bff;
        }
        
       

        .login-box img {
            width: 100px;
            height: 100px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    // عرض رسالة الخطأ إذا كانت موجودة
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
    <div class="login-box">
    <form method="POST" action="">
    <h2>تسجيل دخول عالم التسوق</h2>
        <input type="text" name="user" placeholder="اسم المستخدم" required><br><br>
        <input type="email" name="email" placeholder="البريد الالكتروني " required><br><br>
        <input type="password" name="password" placeholder="كلمة المرور" required><br><br>
        <input type="submit" value="تسجيل الدخول">

    </form>
    <button class="create-account" onclick="window.location.href='register.php'">Create New Account</button>
</div>
<script>
        document.querySelectorAll(".login-box button").forEach(button => {
            button.addEventListener("mouseover", () => {
                button.style.boxShadow = "0 0 15px 5px #fff";
            });

            button.addEventListener("mouseout", () => {
                button.style.boxShadow = "none";
            });
        });
    </script>
</body>
</body>
</html>