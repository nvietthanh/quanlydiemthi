<?php
    require_once 'templates/functions/function.php';
    require_once 'core/init.php';

    if(!isset($_GET['ac'])){
        header('Location: index.php');
    }
    else{
        $ac = $_GET['ac'];
        if($ac == 'login'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $err = checkUserName($username);
            if(empty($err)){
               $err = checkPassword($password);
            }
            if(empty($err)){
                $checkEmail = '#[a-zA-Z][a-zA-Z0-9.]{2,}@gmail.com$#';
                if(preg_match($checkEmail, $username)){
                    $sql_check_user = "SELECT Email, Ten_Dang_Nhap FROM taikhoan WHERE Email = '$username' AND Mat_Khau = '$password'";
                    $username = $data['Ten_Dang_Nhap'];
                    if (!$db->num_rows($sql_check_user)){
                        $err = array('err'=>'account', 'msg'=>'Tên đăng nhập hoặc mật khẩu không chính xác. Có thể bạn đã khai báo sai Tên đăng nhập hoặc Mật khẩu truy cập');
                    }
                    else{
                        $data = $db->fetch_assoc($sql_check_user, 1);
                        $_SESSION['username'] = $username;
                    } 
                }
                else{
                    $sql_check_user = "SELECT Ten_Dang_Nhap FROM taikhoan WHERE Ten_Dang_Nhap = '$username' AND Mat_Khau = '$password'";
                    if (!$db->num_rows($sql_check_user)){
                        $err = array('err'=>'account', 'msg'=>'Tên đăng nhập hoặc mật khẩu không chính xác. Có thể bạn đã khai báo sai Tên đăng nhập hoặc Mật khẩu truy cập');
                    }
                    else{
                        $data = $db->fetch_assoc($sql_check_user, 1);
                        $_SESSION['username'] = $data['Ten_Dang_Nhap'];
                    }
                }
            }
            echo json_encode($err);
        }
        else if($ac == 'logout'){
            $session->destroy();
            echo "Xóa sesstion thành công";
        }
        else{
            header('Location: index.php');
        }
    }
    
?>