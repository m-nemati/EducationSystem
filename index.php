<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>سیستم آموزش</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <h1>سیستم مدیریت آموزشی</h1>
        <img src="images/logicon.png" alt="login icon">
        <form action="pages/checkLogin.php" method="post">
            <span>نام کاربری:</span>
            <input type="text" name="username" placeholder="نام کاربری" autofocus required>
            <br><br>
            <span>رمز عبور:</span>
            <input type="password" name="password" placeholder="رمز عبور" required>
            <br><br>
            <input type="submit" value="ورود" name="register">
            <input type="reset" value="تصحیح">
        </form>
        <br>
        <p id="errorMassageLogin">
            <?php
                session_start();
                if(!empty($_SESSION['err_login']))
                {
                    echo $_SESSION['err_login'];
                    unset($_SESSION['err_login']);
                }
            ?>
        </p>
        <br>
    </div>
</body>

</html>