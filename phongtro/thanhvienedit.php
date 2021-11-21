<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa thông tin thành viên</title>
</head>
<body>
	<?php
	$db= mysqli_connect('localhost','root','', 'ql_phongtro');
	//Kiểm tra kết nối
	if(!$db)
	{
		echo "Lỗi kết nối";
	}
		else
	{
	$CMT_CCCD=$_REQUEST['CMT_CCCD'];
	// hiển thị thông tin khách hàng lên form
	$sql_hienthi="select * from ql_khachthue where CMT_CCCD= '".$CMT_CCCD."' ";
	$kq=mysqli_query($db,$sql_hienthi);
	if (mysqli_num_rows($kq)>0)
	{
		while($r=mysqli_fetch_array($kq))
		{
			$hoten=$r['hoten'];
            $sodienthoai=$r['sodienthoai'];
            $email=$r['email'];
            $namsinh=$r['namsinh'];
            $gioitinh=$r['gioitinh'];
            $CMT_CCCD=$r['CMT_CCCD'];
            $quequan=$r['quequan'];
            $congviecht=$r['congviecht'];
            $loaiphong=$r['loaiphong'];  

		}
	}
	}
	?>
	<center>
		<form action="thanhvienupdate.php" method="POST">
			<b>Sửa thông tin thành viên</b>
			<table border="1" cellpadding="5">
				<tr>
					<td>Họ tên</td>
					<td>
						<input type="text" name="hoten" size="" value="<?php echo $hoten;?>" required><font color="red">(*)</font>
					 </td>
				</tr>
				<tr>
					<td>Số điện thoại</td>
					<td>
						<input type="text" name="sodienthoai" size="" value="<?php echo $sodienthoai;?>">
					 </td>
				</tr>
				<tr>

					<td>Email</td>
					<td>
						<input type="text" name="email" size="75"  value="<?php echo $email;?>">
					</td>
				</tr>
				<tr>
					<td>Năm sinh</td>
					<td>
						<input type="text" name="namsinh" size="75" value="<?php echo $namsinh;?>"> 
					</td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td>
                        <label for="">
                            <input type="radio" name="gioitinh" value="<?php echo $gioitinh;?>">Nam  
                        </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="">
                            <input type="radio" name="gioitinh" value="<?php echo $gioitinh;?>">Nữ  
                        </label> 
                    </td>    
				</tr>
                <tr>
                    <td>CMT(CCCD)</td>
                    <td>
                    <input type="text" name="CMT_CCCD" value="<?php echo $CMT_CCCD;?>"></td>
                </tr>
				<tr>
					<td>Quê quán</td>
					<td>
						<input type="text" name="quequan" size="75" value="<?php echo $quequan;?>" >
					</td>
				</tr>
				<tr>
					<td>Công việc hiện tại</td>
					<td>
						<input type="text" name="congviecht" size="75" value="<?php echo $congviecht;?>" >
					</td>
				</tr>
				<tr>
					<td>Trạng thái</td>
					<td>
						<input type="text" name="trangthai" size="75" value="<?php echo $trangthai;?>">
					</td>
				</tr>
                <tr>
                    <td>Loại phòng</td>
                    <td>
                        <select name="loaiphong" id="">
                            <option value="<?php echo $loaiphong;?>">1</option>
                            <option value="<?php echo $loaiphong;?>">2</option>
                            <option value="<?php echo $loaiphong;?>">3</option>
                        </select>
                    </td>
                </tr>
				<tr>
					<td>
						<input type="submit" name="" value="Lưu">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset" name="" value="Nhập lại">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>