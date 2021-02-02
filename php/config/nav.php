    <!--Intro section-->
    <div class="container-fluid intro-image m-0 p-0"></div>
    <!--Navigation bar-->
    <div class="container-fluid navigation p-0 m-0 sticky-top">
        <div class="container">
            <div class="navbar navbar-expand-md ">
                <a href="index.php" class="navbar-brand">
                    <img class="image-fluid rounded" src="/assets/img/logo.png" alt="logo" class="image-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars" style="font-size: 36px; color: rgb(110, 0, 96)"></span></button>
                <div class="collapse navbar-collapse" id="navbarDefault">
                    <ul class="navbar-nav d-flex justify-content-center">
                        <?php $main = $_POST['main'];?>
                        <li class="nav-item"><a href="home.php" class="nav-link <?php if ($main == 'home') echo 'active-item'?>"> Trang chủ</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link <?php if ($main == 'info') echo 'active-item'?>"> Thông tin</a></li>
                        <li class="nav-item"><a href="search.php" class="nav-link <?php if ($main == 'search') echo 'active-item'?>"> Tra cứu</a></li>

                    </ul>
                    <div class="separator"></div>
                    <ul class="navbar-nav justify-content-center ml-auto">
                        <li class="nav-item"><a href="#" class="nav-link">Đăng nhập</a></li>
                        <li class="separator"></li>
                        <li class="nav-item"><a href="#" class="nav-link">Đăng kí</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>