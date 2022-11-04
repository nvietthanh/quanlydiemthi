        <div class="footer">
            <div class="footer-container">
                <div class="footer-content">
                    <div class="footer-container-name">Trường Phổ Thông Trung Học Thăng Long</div>
                    <div class="footer-container-content">Địa chỉ: Số 44 - Tạ Quang Bửu - Hai Bà Trưng - Hà Nội</div>
                    <div class="footer-container-content">Điện thoại : (+84) 2436682655</div>
                    <div class="footer-container-content">Email: c3thanglong@hanoiedu.vn</div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="footer-copyright-name">
                    Trường Phổ Thông Trung Học Thăng Long
                </div>
                <div class="footer-copyright-content">
                    © Copyright THPT Thăng Long. All right reserved. Thiết kế bởi
                    <a href="http://facebook.com/NNguyenVietThanh/" class="footer-copyright-fb">Viết Thanh</a>
                    . SĐT góp ý: 03583.87102
                </div>
            </div>
        </div>
    </div>
    <div class="modal">
        <div class="modal-login">
            <div class="login-form">
                <div class="form-content">Thành viên đăng nhập</div>
                <div class="form-description">Hãy đăng nhập thành viên để trải nghiệm đầy đủ các tiện ích trên website</div>
                <form>
                    <div class="form-wrap">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="Tên đăng nhập hoặc email">
                    </div>
                    <div class="form-wrap">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="password" placeholder="Mật khẩu">
                        <div class="hidden-password">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-submit-wrap">
                        <input type="reset" value="Thiết lập lại" name="reset">
                        <input type="submit" value="Đăng nhập" name="submit" class="form-submit" onclick="return loginSubmit()">
                    </div>
                </form>
                <button class="form-close" onclick="formClose()">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
        <div class="modal-logout">
            <div class="logout-form">
                <div class="form-content">Xác nhận đăng xuất tài khoản khỏi website</div>
                <div class="form">
                    <div class="logout-submit-wrap">
                        <button onclick="formClose()">Huỷ</button>
                        <input type="submit" value="Xác nhận" name="confirm" onclick="logOut()">
                    </div>
                </div>
                <button class="form-close" onclick="formClose()">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>

        <?php
            //if($ac == 'quan_ly_diem_thi'){
        ?>

            <!-- <div class="modal-edit-score">
                <div class="edit-score-form">
                    <div class="form-name">THÊM, SỬA ĐIỂM HỌC SINH</div>
                    <div class="form-student-infor">
                        <div class="form-student-wrap">
                            <div class="form-student-content">Mã học sinh: </div>
                            <div class="form-student-id"></div>
                        </div>
                        <div class="form-student-wrap">
                            <div class="form-student-content">Họ tên học sinh: </div>
                            <div class="form-student-name"></div>
                        </div>
                        <div class="form-student-wrap">
                            <div class="form-student-content">Ngày sinh: </div>
                            <div class="form-student-birthday"></div>
                        </div>
                    </div>
                    <div class="form-table-score">
                        <span>Thông tin điểm của học sinh bảng bên dưới: </span>
                        <div class="edit-score-table">
                            <table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                        <td rowspan="1" width="20%" colspan="5">Điểm hệ số 1</td>
                                        <td rowspan="2" width="24%" colspan="2">Điểm hệ số 2</td>
                                        <td rowspan="1" width="3%">HK</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Miệng</td>
                                        <td colspan="2">15 phút</td>
                                        <td rowspan="2">8</td>
                                    </tr>
                                    <tr>
                                        <?php
                                            for($i=1 ; $i <= 7 ; $i++){
                                                echo '<td width="3.5%">' .$i. '</td>';
                                            }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" name="tx1[]"></td>
                                        <td><input type="text" name="tx1[]"></td>
                                        <td><input type="text" name="tx1[]"></td>
                                        <td><input type="text" name="tx1[]"></td>
                                        <td><input type="text" name="tx1[]"></td>
                                        <td><input type="text" name="tx1[]"></td>
                                        <td><input type="text" name="tx1[]"></td>
                                        <td><input type="text" name="tx1[]"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="edit-score-wrap">
                        <button onclick="formClose()">Huỷ bỏ</button>
                        <input type="submit" value="Xác nhận" name="confirm" onclick="">
                    </div>
                    <button class="form-close" onclick="formClose()">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div> -->
        
        <?php
            //}
        ?>
    </div>
    <script src="js/functions/main.js"></script>
    <script src="js/functions/account.js"></script>
</body>
</html>