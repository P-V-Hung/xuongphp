<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/style.css">
    <?php echo $__env->yieldContent('link-css'); ?>
    <?php echo $__env->yieldContent('title'); ?>
</head>
<body>
<div class="container">
    <!--Header-->
    <header class="header">
        <div class="title-box">
            <h1>Admin</h1>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="/oop/">Trang chủ</a></li>
                <li><a href="/oop/subject/list">Môn học</a></li>
                <li><a href="">Kì học</a></li>
                <li><a href="">Giảng viên</a></li>
                <li><a href="">Lớp học</a></li>
            </ul>
        </nav>
    </header>

    <!--main-->
    <main>
        <?php echo $__env->yieldContent('main-content'); ?>
    </main>

    <!--Footer-->
    <footer style="background-color: black;padding: 5px;margin-top: 30px">
        <p style="text-align: center;color: white">@media  overwrite commited abel</p>
    </footer>
</div>
</body>
</html>

<?php /**PATH F:\xampp\htdocs\oop\resources\views/layout/layout.blade.php ENDPATH**/ ?>