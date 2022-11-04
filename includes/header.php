<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/image/logo/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="public/icon/css/all.css">
    <link rel="stylesheet" href="public/css/bass.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/mainscore.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/responsive.css">
    <script src="js/jquery-3.6.1.js"></script>
    <title><?php echo $title;?></title>
</head>

<body>
    <div id="app">
        <div class="wapper">
            <div class="header">
                <div class="header-logo">
                    <a href="index.php">
                        <img src="public/image/logo/logo.jpg" alt="Trường PTTH Thăng Long">
                    </a>
                </div>
                <div class="header-modify">
                    <h1>TRƯỜNG PTTH THĂNG LONG</h1>
                    <h3>Địa chỉ: Số 44 - Tạ Quang Bửu - Hai Bà Trưng - Hà Nội</h3>
                    <h3>Hotline : (+84) 2436682655</h3>
                </div>
                <div class="header-wrap">
                    <ul class="social-list">
                        <li class="social-item header-item__facebook">
                            <a href="https://www.facebook.com/Tr%C6%B0%E1%BB%9Dng-THPT-Th%C4%83ng-Long-H%C3%A0-N%E1%BB%99i-107167197344463/">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="social-item header-item__google">
                            <a href="https://www.google.com/">
                                <i class="fa-brands fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="social-item header-item__youtube">
                            <a href="https://www.youtube.com/">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                        <li class="social-item header-item__twitte">
                            <a href="https://www.twitte.com/">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social-item header-item__feed">
                            <a href="http://www.thptthanglonghanoi.edu.vn/">
                                <i class="fa-solid fa-rss"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="navbar">
                <div class="navbar-name">
                    <a href="index.php">TRANG CHỦ</a>
                </div>
                <div class="navbar-name">
                    <span>GIỚI THIỆU</span>
                    <ul class="navbar-extend-menu">
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=tong_quan" class="navbar-extend-item-link">Tổng quan</a>
                        </div>
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=tam_thu" class="navbar-extend-item-link">Tâm thư</a>
                        </div>
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=ban_giam_hieu" class="navbar-extend-item-link">Ban giám hiệu</a>
                        </div>
                    </ul>
                </div>
                <div class="navbar-name">
                    <span> TIN TỨC </span>
                    <ul class="navbar-extend-menu">
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=tin_nha_truong" class="navbar-extend-item-link">Tin nhà trường</a>
                        </div>
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=tin_giao_duc" class="navbar-extend-item-link">Tin giáo dục</a>
                        </div>
                    </ul>
                </div>
                <div class="navbar-name">
                    <span> GIÁO VIÊN </span>
                    <ul class="navbar-extend-menu">
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=thoi_khoa_bieu" class="navbar-extend-item-link">Thời khóa biểu GV</a>
                        </div>
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=lich_cong_tac_giang_day" class="navbar-extend-item-link">Lịch công tác - Giảng dạy</a>
                        </div>
                        <?php
                            if($root == 'teacher'){
                                echo '<div class="navbar-extend-item">
                                        <a href="index.php?ac=quan_ly_hoc_sinh" class="navbar-extend-item-link">Quản lý học sinh</a>
                                    </div>
                                    <div class="navbar-extend-item">
                                        <a href="index.php?ac=quan_ly_diem_thi" class="navbar-extend-item-link">Quản lý điểm thi</a>
                                    </div>';
                            }
                        ?>
                    </ul>
                </div>
                <div class="navbar-name">
                    <span> HỌC SINH </span>
                    <ul class="navbar-extend-menu">
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=thoi_khoa_bieu" class="navbar-extend-item-link">Thời khóa biểu</a>
                        </div>
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=noi_quy_hoc_sinh" class="navbar-extend-item-link">Nội quy học sinh</a>
                        </div>
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=guong_sang_hoc_sinh" class="navbar-extend-item-link">Gương sáng học sinh</a>
                        </div>
                        <?php
                            if($root == 'student'){
                                echo '<div class="navbar-extend-item">
                                        <a href="./index.php?ac=theo_doi_ket_qua_hoc_tap" class="navbar-extend-item-link">Theo dõi kết quả học tập</a>
                                    </div>';
                            }
                        ?>
                    </ul>
                </div>
                <div class="navbar-name">
                    <span> ALBUM ẢNH </span>
                    <ul class="navbar-extend-menu">
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=album_hinh_anh" class="navbar-extend-item-link">Album hình ảnh</a>
                        </div>
                        <div class="navbar-extend-item">
                            <a href="index.php?ac=album_video" class="navbar-extend-item-link">Album video</a>
                        </div>
                    </ul>
                </div>
                <div class="navbar-name">
                    <a href="index.php?ac=tuyen_dung">TUYỂN DỤNG</a>
                </div>
                <div class="navbar-name">
                    <a href="index.php?ac=lien_he">LIÊN HỆ</a>
                </div>
                <?php
                    if($root == 'admin'){
                        echo '<div class="navbar-name">
                                <a href="index.php?ac=quan_ly_he_thong" class="navbar-extend-item-link">QUẢN LÝ HỆ THỐNG</a>
                            </div>';
                    }
                ?>
            </div>
        </div>