<?php
    require_once 'core/init.php';

    if(!$username){
        echo '<script>alert("Vui lòng đăng nhập để thực hiện chức năng"); window.location.href = "index.php"</script>';
    }
    else{
?>
<div class="container">
    <div class="container-infor">
        <div class="infor-wrap">
            <div class="infor-name">GV. <?=$fullname?></div>
            <button class="logout" onclick="logout()">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Đăng xuất</span>
            </button>
        </div>
    </div>
    <div class="container-modify">
        <div class="modify-content">* Lưu ý :</div>
        <div> - Chỉ có giáo viên bộ môn mới có quyền sửa đổi điểm của học sinh</div>
        <div> - Giáo viên bộ môn cần xác nhận để thay đổi điểm</div>
        <div> - Giáo viên chịu mọi trách nhiệm về hành vi của mình</div>
    </div>
    <div class="container-menu">
        <div class="menu-wrap">
            <div class="menu-name">
                Khối :
            </div>
            <div class="select">
                <select name="khoi" id="khoi">
                    <?php
                        for($i = 10; $i <= 12 ;$i++){
                            echo '<option value="khoi' .$i. '">Khối ' .$i. '</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="menu-wrap">
            <div class="menu-name">
                Lớp :
            </div>
            <div class="select">
                <select name="lop" id="lop">
                    <?php
                        for($i = 10; $i <= 12 ;$i++){
                            echo '<option value="khoi' .$i. 'A">' .$i. 'A</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="menu-wrap">
            <div class="menu-name">
                Môn học :
            </div>
            <div class="select">
                <select name="monhoc" id="monhoc">
                    <?php
                        $monhoc = array("toan"=>"Toán", "nguvan"=>"Ngữ Văn", "sinhhoc"=>"Sinh học", "gdcd"=>"Giáo dục công dân");
                        foreach($monhoc as $key => $value){
                            echo '<option value="' .$key. 'A">' .$value. '</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="menu-wrap">
            <div class="menu-name">
                Học kỳ :
            </div>
            <div class="select">
                <select name="hocky" id="hocky">
                    <option value="hocky1">Học kỳ I</option>
                    <option value="hocky2">Học kỳ II</option>
                </select>
            </div>
        </div>
    </div>
    <div class="container-table">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td rowspan="3" width="2.5%">STT</td>
                    <td rowspan="3" width="6%">Mã HS</td>
                    <td rowspan="3" width="12%">Họ tên</td>
                    <td rowspan="3" width="6%">Ngày sinh</td>
                    <td rowspan="1" width="20%" colspan="5">Điểm hệ số 1</td>
                    <td rowspan="2" width="24%" colspan="2">Điểm hệ số 2</td>
                    <td rowspan="1" width="3%">HK</td>
                    <td rowspan="1" width="5%">TBHK</td>
                    <td rowspan="3" width="6%">Tuỳ chọn</td>
                </tr>
                <tr>
                    <td colspan="3">Miệng</td>
                    <td colspan="2">15 phút</td>
                    <td rowspan="3">8</td>
                    <td rowspan="3">9</td>
                </tr>
                <tr>
                    <td width="3.5%">1</td>
                    <td width="3.5%">2</td>
                    <td width="3.5%">3</td>
                    <td width="3.5%">4</td>
                    <td width="3.5%">5</td>
                    <td width="3.5%">6</td>
                    <td width="3.5%">7</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i=1 ; $i <= 10 ; $i++){
                        echo '<tr>';
                        echo '<td>' .$i. '</td>';
                        echo '<td>' . rand(1000000,2000000) .'</td>';
                        echo '<td>Mai Phương Anh ' .rand(1, 10). '</td>';
                        echo '<td>1/1/2001</td>';
                        echo '<td>' .rand(1, 10). '</td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td>' .rand(1, 10). '</td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td>' .rand(1, 10). '</td>';
                        echo '<td></td>';
                        echo '<td>
                                <div class="btn-edit-score"><i class="fa-solid fa-pencil"></i></div>
                                <div class="btn-delete-score"><i class="fa-solid fa-trash-can"></i></div>
                            </td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
    }
?>