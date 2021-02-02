<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "config/header.php" ?>
    <title>Tra cứu thông tin</title>
</head>

<body>
    <?php
    $_POST['main'] = 'search';
    include "config/nav.php" ?>

    <!--Content-->
    <div class="blog-container container">
        <h1>Tra cứu thông tin vé</h1>
        <div class="line-separator"></div>
        <form class="my-3">
            <div class="form-group row align-items-center justify-content-center">
                <label for="phone" class="col-sm-3 col-form-label col-form-label-lg">Nhập số điện thoại</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-lg" id="phone" autofocus>
                        </div>
                        <div class="col-sm-3 mt-2">
                            <button type="button" id="search" class="btn btn-info">Tra cứu</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="result">
            <h5>Kết quả: <span id="result-text"></span></h5>
            <div class="d-flex justify-content-center align-items-center">
                <div class="loader" id="loading"></div>
            </div>
            <div id="result-table" style="overflow-x:auto;">
                <table class="table table-bordered" id="tabledata">
                    <thead>
                        <tr class="table-info">
                            <th>Mã vé</th>
                            <th>Họ tên</th>
                            <th>Học vấn/ Công việc</th>
                            <th>Email</th>
                            <th>Hình thức thanh toán</th>
                            <th>Trạng thái thanh toán</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include 'config/footer.php' ?>

    <!--Script-->
    <script src="/assets/js/search.js"></script>
</body>

</html>