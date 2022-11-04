<?php

    // Include các thư viện
    require_once 'classes/Session.php';
    require_once 'classes/Db.php';
    
    $db = new DB();
    $db->connect();

    // Khởi tạo object Session
    $session = new Session();
    $session->start();
    $username = $session->get();
    $root = $fullname = '';

    if($username){
        $sqlRoot = "SELECT Ten_PQ FROM phanquyen INNER JOIN taikhoan ON taikhoan.Ma_PQ = phanquyen.Ma_PQ WHERE Ten_Dang_Nhap = '$username'";
        $root = $db->fetch_assoc($sqlRoot, 1)['Ten_PQ'];
        if($root == 'teacher'){
            $sql = "SELECT Ho_Ten FROM phanquyen INNER JOIN taikhoan ON taikhoan.Ma_PQ = phanquyen.Ma_PQ INNER JOIN giaovien ON giaovien.ID_Tai_Khoan = taikhoan.ID_Tai_Khoan WHERE Ten_Dang_Nhap = '$username'";
            $fullname = $db->fetch_assoc($sql, 1)['Ho_Ten'];
        }
    }

    $title = 'Trường PTTH Thăng Long';
    if(isset($_GET['ac'])){
        $ac = $_GET['ac'];
        switch($ac){
            case 'quan_ly_diem_thi':
                $title = 'Quản lý điểm thi - ' . $title;
                break;
            case 'theo_doi_ket_qua_hoc_tap':
                $title = 'Theo dõi kết quả học tập - ' . $title;
                break;
        }
    }
   
    // Múi giờ chung
    date_default_timezone_set('Asia/Ho_Chi_Minh'); 
    $date_current = '';
    $date_current = date("Y-m-d H:i:sa");
?>