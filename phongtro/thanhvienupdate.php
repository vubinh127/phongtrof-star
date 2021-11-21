<!DOCTYPE html>
<html>
<head>
	<title>SỬA THÔNG TIN THÀNH VIÊN</title>
	<meta charset="utf-8">
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
    
    $db= mysqli_connect('localhost','root','','ql_phongtro');
	//Kiểm tra kết nối
	if(!$db)
	{
		echo "Lỗi kết nối";
	}
	$sql_update="update ql_khachthue set hoten='".$hoten."',sodienthoai='".$sodienthoai."',email='".$email."',namsinh='".$namsinh."',gioitinh='".$gioitinh."',quequan='".$quequan."',congviecht='".$congviecht."',trangthai='".$trangthai."',loaiphong='".$loaiphong."' where CMT_CCCD = '".$CMT_CCCD."'";
	mysqli_query($db,$sql_update);
	// echo $sql_update;
	header('location:thanhvienshow.php');
	?>
</body>
</html>