<?php
    if(isset($_POST['btn_submit'])){
        $user=$_POST['txtUser'];
        $password=$_POST['txtPassword'];
        //xử lí dữ liệu
        if ($user == 'admin' && $password == 'admin')
        {
            header('location:thanhvienshow.php' );
        } else {
            header('location:denied.php' );
        }
    }
?>