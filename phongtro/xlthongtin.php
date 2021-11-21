<!DOCTYPE html>
<html>
<head>
	<title>Xử lí thông tin khách hàng</title>
</head>
<body>
    <?php 
        $hoten=$_POST['hoten'];
        $sodienthoai=$_POST['sodienthoai'];
        $email=$_POST['email'];
        $namsinh=$_POST['namsinh'];
        $gioitinh=$_POST['gioitinh'];
        $CMT_CCCD=$_POST['CMT_CCCD'];
        $quequan=$_POST['quequan'];
        $congviecht=$_POST['congviecht'];
        $trangthai=$_POST['trangthai'];
        $loaiphong=$_POST['loaiphong'];
        
        //thêm vào csdl nguồn
            //Kết nối đến CSDL
        $db= mysqli_connect('localhost','root','','ql_phongtro');
        if (!$db) {
            echo "Lỗi kết nối";
        }
        else {
            echo "Kết nối thành công";
            // Câu lệnh SQL insert
        $sql_Insert="Insert into ql_khachthue (hoten, sodienthoai, email, namsinh, gioitinh, CMT_CCCD, quequan, congviecht, trangthai, loaiphong) values (
                '".$hoten."',
                '".$sodienthoai."',
                '".$email."',
                '".$namsinh."',
                '".$gioitinh."',
                '".$CMT_CCCD."',
                '".$quequan."',
                '".$congviecht."',
                '".$trangthai."',
                '".$loaiphong."')";
                
        $sql_Insert = "INSERT INTO ql_khachthue (`hoten`, `sodienthoai`, `email`, `namsinh`, `gioitinh`, `CMT_CCCD`, `quequan`, `congviecht`,`trangthai`, `loaiphong`)
             VALUES ('".$hoten."', '".$sodienthoai."', '".$email."', '".$namsinh."', '".$gioitinh."', '".$CMT_CCCD."', '".$quequan."', '".$congviecht."','".$trangthai."', '".$loaiphong."')";
        // $sql_Insert = "Delete from ql_khachthue";
       echo $sql_Insert;
            //Thực thi câu lệnh SQL
        mysqli_query($db,$sql_Insert);
        header('location:signupsucces.php');
        }
      
	 ?>
</body>
</html>