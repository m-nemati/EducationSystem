<?php
session_start();
if(!isset($_SESSION['teacherId']))
{
    header('location:../index.php');
}
else{
$code=$_SESSION['teacherId'];
//Include Connect to Database File Setting
include_once ('connectdb.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>سیستم آموزشی اساتید</title>
    <link rel="stylesheet" href="../css/teacherstyle.css">
</head>
<body>
    <header>
        <div class="user">
            <span>کاربر جاری:</span>
            <span>
                <?php
                    $stmt=$conn->prepare("SELECT * FROM tbl_teachers WHERE code=:code");
                    $stmt->bindParam(':code',$code);
                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    $row=$stmt->fetch();

                    echo $row['tname'];
                    echo "   ";
                    echo $row['tfamily'];
                ?>
            </span>
        </div>
        <div class="logo">
            <img src="../images/logo.png" alt="">
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#">برنامه کلاسی</a></li>
            <li><a href="#">ثبت نمرات ترم</a></li>
            <li><a href="#">بررسی اعتراض</a></li>
            <li><a href="#">گزارشات آموزشی</a></li>
            <li><a href="logout.php">خروج </a></li>
        </ul>
    </nav>
    <section>
       <div class="news">
       <h2>
            اطلاعیه های آموزشی
        </h2>
        <p>
            بازه زمانی ثبت نمرات ترم دوم تحصیلی از تاریخ 1 خرداد 97 الی 30 خرداد 1397 می باشد
        </p>
       </div>
    </section>
</body>
</html>