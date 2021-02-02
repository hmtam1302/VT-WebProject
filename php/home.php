<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "config/header.php" ?>
    <title>Về Trường</title>
</head>

<body>
    <?php
    $_POST['main'] = 'home';
    include "config/nav.php" ?>

    <!--Content-->
    <div class="blog-container container">
        <h1>Hoạt động</h1>
        <div class="line-separator"></div>
        <div class="row py-3">
            <div class="col-lg col-sm-12 my-2">
                <div class="box">
                    <img src="/assets/img/hocbong.jpg" alt="Học bổng" class="image-fluid">
                    <div class="detail">
                        <p>Gây quỹ học bổng</p>
                    </div>
                </div>
            </div>
            <div class="col-lg col-sm-12 my-2">
                <div class="box">
                    <img src="/assets/img/tvts.jpg" alt="Học bổng" class="image-fluid">
                    <div class="detail">
                        <p>Tư vấn hướng nghiệp</p>
                    </div>
                </div>
            </div>
            <div class="col-lg col-sm-12 my-2">
                <div class="box">
                    <img src="/assets/img/giaoluu.jpg" alt="Học bổng" class="image-fluid">
                    <div class="detail">
                        <p>Giao lưu học sinh và sinh viên</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-container container">
        <h1>Thông báo</h1>
        <div class="line-separator"></div>
        <p class="my-3">Hiện chưa có thông báo mới</p>
    </div>
    <?php include 'config/footer.php' ?>
</body>

</html>