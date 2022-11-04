<?php
    require_once 'core/init.php';

    if(!$user){
        header('Location: index.php');
    }
    else{
        $result = $_POST;
        if(!empty($result)){
            $mahs = $_POST['mahs'];
            echo json_encode(array('mahs'=>$mahs));
        }
    }
?>