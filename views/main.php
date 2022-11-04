<div class="container">
    <div class="slider-picture">
        <button class="slider-prev" onclick="sliderPrev()">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <div class="main-slider">
            <div class="slider-container">
                <?php
                // <img src="./image/school/picture-' .$i. '.png" alt="" class="slider-image">
                    for($i = 1 ; $i <= 7 ; $i++){
                        // echo '<h1 class="slider-image">' .$i. '</h1>';
                        echo '<img src="public/image/school/picture-' .$i. '.png" alt="" class="slider-image">';
                    }
                ?>
            </div>
            <div class="slider-amount">
                <?php
                    for($i = 1 ; $i <= 7 ; $i++){
                        echo '<i class="fa-solid fa-circle"></i>';
                    }
                ?>
            </div>
        </div>
        <button class="slider-next" onclick="sliderNext()">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
    <div class="main-container">
        <div class="main-one">
            <div class="img-home">
                <img src="public/image/school/avatar.jpg" alt="Ảnh đại diện Trường PTTH Thăng Long">
            </div>
            <div class="video-review">
                <video controls poster="public/image/school/anh-truong.png">
                    <source src="public/video/gioi-thieu-truong-phth-thang-long.webm">
                </video>
            </div>

            <div class="news">

            </div>
        </div>
        <div class="main-two">
            <div class="class-ranking">
                <div>Bảng xếp hạng thi đua tuần</div>
                <table cellpadding="0" cellspacing="0" class="table-ranking">
                    <tr>
                        <td>
                            <p>Tên lớp</p>
                        </td>
                        <td>
                            <p>Xếp hạng</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><?php echo '10A1'; ?></p>
                        </td>
                        <td>
                            <p>Nhất</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><?php echo '11A5'; ?></p>
                        </td>
                        <td>
                            <p>Nhì</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><?php echo '11A7'; ?></p>
                        </td>
                        <td>
                            <p>Ba</p>
                        </td>
                    </tr>
                </table>
                <button class="class-ranking__all">Xem chi tiết</button>
            </div>

            <!-- Đăng xuất đăng nhập -->
            <div class="panal-primary">
                <div class="panal-primary__label">Đăng nhập</div>
                <!-- <button class="btn-panal-registration" onclick="registrationOpen()">Đăng ký</button> -->
                <?php
                    if($root == 'teacher'){
                        $fullname = 'GV. '. $fullname;
                    }
                    else if($root == 'student'){
                        $fullname = 'HS. '. $fullname;
                    }
                    if(!$username){
                        echo '<div class="panal-primary-wrap">
                                <button class="btn-panal-login" onclick="loginOpen()">Đăng nhập</button>
                                </div>';
                    }
                    else{
                        echo '<div class="panal-user-wrap">
                                <div class="user-name-wrap">
                                    <i class="fa-solid fa-user-graduate"></i>
                                    <span>Tài khoản :</span>
                                    <span class="user-name">' .$fullname. '</span>
                                </div>
                                <div class="user-infor-wrap">
                                    <img src="public/image/school/avatar.jpg" alt="" class="user-infor-image">
                                    <div class="user-infor-menu">
                                        <div>Thông tin thành viên</div>
                                        <div>Thiết lập tài khoản</div>
                                    </div>
                                </div>
                                <div class="user-logout">
                                    <button onclick="logout()">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <span>Thoát</span>
                                    </button>
                                </div>
                            </div>';
                    }
                ?>
            </div>

            <div class="panal-primary">
                <div class="panal-primary__label">Tài liệu tải lên</div>
                <div class="panal-modify">
                    <div class="panal-modify-container">
                        <div class="panal-modify-list">
                            <?php
                                $htmls = '';
                                for($i = 0; $i < 4 ; $i++){
                                    $htmls .='<div class="panal-modify-item">
                                            <div class="panal-modify__name"><a href="">' .($i + 1). '</a></div>
                                            <div class="panal-modify__content">Nội dung ôn tập thi HK II NH 2021-2022</div>
                                            <div class="panal-modify-wrap">
                                                <span class="panal-modify__date">Ngày đăng: 21/1/2022</span>
                                                <span class="panal-modify__view">  |  Lượt xem: ' .rand(1, 100). '00</span>
                                            </div>
                                        </div>';
                                }
                                echo $htmls;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panal-primary">
                <div class="panal-primary__label">Thống kê</div>
                <div class="panal-statistical">
                    <div class="panal-statistical-wrap">
                        <div class="panal-statistical-label">
                            <i class="fa-solid fa-bolt-lightning"></i>
                            <span>Đang truy cập</span>
                        </div>
                        <div class="panal-statistical-value">3</div>
                    </div>
                    <div class="panal-statistical-wrap">
                        <div class="panal-statistical-label">
                            <i class="fa-solid fa-filter"></i>
                            <span>Hôm nay</span>
                        </div>
                        <div class="panal-statistical-value">133</div>
                    </div>
                    <div class="panal-statistical-wrap">
                        <div class="panal-statistical-label">
                            <i class="fa-regular fa-calendar"></i>
                            <span>Tháng hiện tại</span>
                        </div>
                        <div class="panal-statistical-value"><?php $count = 17777; echo '<span>' .number_format($count). '</span>';?></div>
                    </div>
                    <div class="panal-statistical-wrap">
                        <div class="panal-statistical-label">
                            <i class="fa-solid fa-bars"></i>
                            <span>Tổng lượng truy cập</span>
                        </div>
                        <div class="panal-statistical-value"><?php $count = 960777; echo '<span>' .number_format($count). '</span>';?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/functions/container.js"></script>
