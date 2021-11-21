<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>F-Star</title>
    <link rel="stylesheet" href="css/thongtinthanhvien.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand logo" href=""><img src="./css/img/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav  ml-auto">
					<li class="nav-item active">
					    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
                         <a class="nav-link" target="_blank" href="https://www.facebook.com/Ph%C3%B2ng-Tr%E1%BB%8D-F-Star-100954355227894">Pages</a>
					</li>
				</ul>
				</div>
			</nav>
		</div>
	</header>
    <main>
        <div class="banner">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="css/img/banner.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/banner1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="css/img/banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="text-center py-3">
            <h2>Đăng kí thông tin </h2>
        </div>
        <div class="text-login py-5 text-center">
            <form action="xlthongtin.php" method="POST">
                <center>
                    <table border="1" cellpadding="10">
                        <tr>
                            <td>Họ tên</td>
                            <td>
                                <input type="text" name="hoten" id="" size="75" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td>
                                <input type="text" name="sodienthoai" id="" size="75" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="email" name="email" id="" size="75" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>Năm sinh</td>
                            <td>
                                <input type="text" name="namsinh" id="" size="75" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>Giới tính</td>
                            <td>
                                <label for="">
                                    <input type="radio" name="gioitinh" value="Nam" required="">Nam  
                                </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="">
                                    <input type="radio" name="gioitinh" value="Nữ" required="">Nữ  
                                </label> 
                            </td>    
                        </tr>
                        <tr>
                            <td>CMT(CCCD)</td>
                            <td>
                                <input type="text" name="CMT_CCCD" id="" size="75" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>Quê quán</td>
                            <td>
                                <input type="text" name="quequan" id="" size="75">
                            </td>
                        </tr>
                        <tr>
                            <td>Công việc hiện tại</td>
                            <td>
                                <input type="text" name="congviecht" id="" size="75" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>Trạng thái</td>
                            <td>
                                <input type="text" name="trangthai" size="75" required="" value="Chờ thuê phòng" placeholder="Vui lòng điền:Chờ thuê phòng ">
                            </td>
                        </tr>
                        <tr>
                            <td>Loại phòng</td>
                            <td>
                                <select name="loaiphong">
                                    <option value="Loại 1">1</option>
                                    <option value="Loại 2">2</option>
                                    <option value="Loại 3">3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-dark">Đăng kí</button>
                            </td>
                        </tr>
                        
                    </table>
                </center>
            </form>
        </div>
    </main>
    <footer>
		<div class="contact">
			<div class="container py-3">
				<div class="row py-3">
					<div class="col-6">
						<h3>Địa chỉ</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6550700249973!2d105.76001421476357!3d21.046483185988755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c3ce577141%3A0xb1a1ac92701777bc!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUw6BpIG5ndXnDqm4gdsOgIE3DtGkgdHLGsOG7nW5nIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1606875244517!5m2!1svi!2s" widtd="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div class="col-6 py-5">
						<h3 class="text-center">Liên hệ</h3>
						<h6 class="text-center">Số điện tdoại:037xxxxx53 - 081xxxxx39 - 036xxxxx99 <br> Email: phongtroF_Star@gmail.com</h6>
						<div class="row admin">
							<div class="col-3">
								<a href=""><img src="css/img/admin1.jpg" alt=""></a>
							</div>
							<div class="col-3">
								<a href=""><img src="css/img/admin2.jpg" alt=""></a>
							</div>
							<div class="col-3">
								<a href=""><img src="css/img/admin3.jpg" alt=""></a>
							</div>
							<div class="col-3">
								<a href=""><img src="css/img/admin4.jpg" alt=""></a>
							</div>
						</div>
						<p class="text-center py-2">
							Cảm ơn quý khách đã tin tưởng và sử dụng dịch vụ của chúng tôi <br>
							_-*> PHÒNG TRỌ F-STAR <*-_
						</p>
					</div>
				</div>
			</div>
		</div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>