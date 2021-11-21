<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh sách phòng trọ</title>
	<link rel="stylesheet" type="text/css" href="phongtro.css">
	<link rel="stylesheet" href="C:/xampp/htdocs/css/bootstrap.min.css">
</head>
<body>
	<center>

		<form action="" method="POST">
		<h2>DANH SÁCH THÔNG TIN THÀNH VIÊN</h2>
		<a href="thanhvienshow.php">Back</a>	
		<?php
	$db= mysqli_connect('localhost','root','', 'ql_phongtro');
	//Kiểm tra kết nối
	if(!$db)
	{
		echo "Lỗi kết nối";
	}
	//Tìm kiếm
	$key = $_POST['txtkey'];
	$sql_select="select * from ql_khachthue where CMT_CCCD like '%".$key."%' or hoten like '%".$key."%' or loaiphong like '%".$key."%' or sodienthoai like '%".$key."%'";
	//Câu lệnh sql inser
	$kq=mysqli_query($db,$sql_select);
	echo '<table border="1" cellpadding="5">';
			echo "<tr>";
			echo"<td>STT</td>";
			echo"<td>Họ tên</td>";
			echo"<td>Số điện thoại</td>";
			echo"<td>Email</td>";
			echo"<td>Năm sinh</td>";
			echo"<td>Giới tính</td>";
			echo"<td>CMT_CCCD</td>";
			echo"<td>Quê Quán</td>";
			echo"<td>Công việc hiện tại</td>";
			echo"<td>Trạng thái</td>";
			echo"<td>Loại phòng</td>";
			echo"<td colspan= '2'>Thao tác<br><a href='thongtinthanhvien.php'>Thêm mới</a></td>";
		echo"</tr>";
		$i=0;
		if (mysqli_num_rows($kq)>0)
		{
			while ($rows=mysqli_fetch_array($kq)) 
			{
				$i++;
			echo"<tr>";
				$CMT_CCCD=$rows['CMT_CCCD'];
				echo"<td>".$i."</td>";
				echo"<td>".$rows['hoten']."</td>";
				echo"<td>".$rows['sodienthoai']."</td>";
				echo"<td>".$rows['email']."</td>";
				echo"<td>".$rows['namsinh']."</td>";
				echo"<td>".$rows['gioitinh']."</td>";
				echo"<td>".$rows['CMT_CCCD']."</td>";
				echo"<td>".$rows['quequan']."</td>";
				echo"<td>".$rows['congviecht']."</td>";
				echo"<td>".$rows['trangthai']."</td>";
				echo"<td>".$rows['loaiphong']."</td>";
				echo"<td><a href='thanhvienedit.php?CMT_CCCD=$CMT_CCCD'>Edit</a></td>";
			    echo"<td><a href='xoathanhvien.php?CMT_CCCD=$CMT_CCCD'>Delete</a></td>";
			 echo "</tr>";
			}
		}
		 ?>		
	</table>
	</form>
	</center>
</body>
</html>	