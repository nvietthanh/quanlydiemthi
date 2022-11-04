<?php
    // Include database, session, general info
    require_once 'core/init.php';

    require_once 'includes/header.php';

    if(isset($_GET['ac'])){
        $ac = $_GET['ac'];
        switch($ac){
            case 'quan_ly_diem_thi':
                if($root == ''){
                    echo '<script>alert("Vui lòng đăng nhập để thực hiện chức năng này"); window.location.href = "index.php";</script>';
                }
                else if($root == 'teacher'){
                    require_once 'views/teacher/list-score.php';
                }
                else{
                    echo '<script>alert("Bạn không đủ quyền để truy cập vào chức năng này"); window.location.href = "index.php";</script>';
                }
                break;

            case 'quan_ly_hoc_sinh':
                if($root == ''){
                    echo '<script>alert("Vui lòng đăng nhập để thực hiện chức năng này"); window.location.href = "index.php";</script>';
                }
                else if($root == 'teacher'){
                    require_once 'views/default.php';
                }
                else{
                    echo '<script>alert("Bạn không đủ quyền để truy cập vào chức năng này"); window.location.href = "index.php";</script>';
                }
                break;

            case 'theo_doi_ket_qua_hoc_tap':
                if($root == ''){
                    echo '<script>alert("Vui lòng đăng nhập để thực hiện chức năng này"); window.location.href = "index.php";</script>';
                }
                else if($root == 'student'){
                    require_once 'views/student/search-score.php';
                }
                else{
                    echo '<script>alert("Bạn không đủ quyền để truy cập vào chức năng này"); window.location.href = "index.php";</script>';
                }
                break;
            default:
                require_once 'views/default.php';
                break;
        }
    }
    else{
        require_once 'views/main.php';
    }

    require_once 'includes/footer.php';

?>