
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


    // كتابة استعلام SQL لإضافة المستخدم إلى قاعدة البيانات
    $query = "INSERT INTO myaccounts (user, email, password) VALUES ( '$username','$email', '$password')";
    $result = mysqli_query($con, $query);

    // التحقق من نجاح العملية
    if ($result) {
        // تخزين البريد الإلكتروني في الجلسة
        $_SESSION['email'] = $email;


        // توجيه المستخدم إلى المتجر
        header("Location: loginn.php");
        exit;
    } else {
        $error_message = "فشل في إنشاء الحساب. حاول مرة أخرى.";
    }
}

// إذا كان البريد الإلكتروني قد أُرسل من صفحة تسجيل الدخول
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب جديد</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .register-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .register-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .register-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .register-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="register-container">
<h2>Create New Account</h2>
    <?php
    // عرض رسالة الخطأ إذا كانت موجودة
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
    <form method="POST" action="">
        <label>البريد الإلكتروني:</label><br>
        <input type="text" name="user" placeholder="User" required><br><br>
        <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" required><br><br>
        <label>كلمة المرور:</label>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Create account</button>
    </form>
</body>
</html>