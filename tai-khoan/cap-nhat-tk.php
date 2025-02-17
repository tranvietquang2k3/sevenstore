<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/tai-khoan/css/main.css">
<!--===============================================================================================-->

</head>
<body>

	<!-- CODE XỬ LÝ PHP -->
	<?php
        session_start();
		require_once ('../admin/dao/khach-hang.php');
        
        extract($_REQUEST);
        if(array_key_exists('btn_update',$_REQUEST)){
            khach_hang_update($ma_kh,$ho_ten,$mat_khau,$email,$dia_chi);
            $_SESSION['user'] = khach_hang_select_by_id($ma_kh);
            echo '<script language="javascript">';
            echo 'alert("Cập nhật thành công!")';
            echo '</script>';
        }else{
            extract($_SESSION['user']);
        }
		
	?>

	<!-- -->
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../css/tai-khoan/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method = "post">
					<span class="login100-form-logo">
						<a href="../../sevenstore/trang-chinh/index.php"><img src="../css/tai-khoan/images/logo_sevenstore.png" width = "80px" alt=""></a>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Update account
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="ma_kh" placeholder="Username" value= "<?=$ma_kh?>" readonly>
						<span class="focus-input100" data-placeholder="&#xf18e;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter fullname">
						<input class="input100" type="text" name="ho_ten" placeholder="Fullname" value="<?=$ho_ten?>">
						<span class="focus-input100" class='fas' data-placeholder="&#xf18e;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="mat_khau" placeholder="mat_khau" value = "<?=$mat_khau?>" readonly>
						<span class="focus-input100" data-placeholder="&#xf18e;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter email">
						<input class="input100" type="text" name="email" placeholder="Email" value = "<?=$email?>">
						<span class="focus-input100" data-placeholder="&#xf18e;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Address">
						<input class="input100" type="text" name="dia_chi" placeholder="Address" value ="<?=$dia_chi?>">
						<span class="focus-input100" data-placeholder="&#xf18e;"></span>
					</div>

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type = "submit" name = "btn_update">
							OK
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="../../sevenstore/trang-chinh/index.php">
							Home ?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/bootstrap/js/popper.js"></script>
	<script src="../css/tai-khoan/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/daterangepicker/moment.min.js"></script>
	<script src="../css/tai-khoan/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../css/tai-khoan/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../css/tai-khoan/js/main.js"></script>

</body>
</html>