<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<meta charset="utf-8">
	<title>Register</title>
</head>
<body>
		<div class="container-lg">
        	<h1 style="text-align: center;" class="mt-3">Webboard KakKak</h1>
        	<?php include "nav.php" ?>
			<div class="row mt-4">
        		<div class="col-sm-8 col-md-6 col-lg-4 mx-auto"> 
					<?php if(isset($_SESSION['add_login'])){
						if($_SESSION['add_login']=='error'){
							echo "<div class='alert alert-danger'>
							ชื่อบัญชีหรือฐานข้อมูลมีปัญหา </div>";
						}else{
							echo "<div class='alert alert-success'>
						เพิ่มบัญชีเรียบร้อยแล้ว</div>";
					} 
					unset($_SESSION['add_login']);
						}
					?>
					<div class="card border-primary">
					<h5 class="card-header bg-primary text-white">สมัครสมาชิก </h5>
					<form action="register_save.php" method="POST">
					<div class="card-body">
						<div class="row mb-3">
							<label class="col-lg-3 col-form-label" for="login">ชื่อบัญชี :</label>
							<div class="col-lg-9">
								<input  id = "login "type="text" name="login" class="form-control">
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-lg-3 col-form-label" for="pwd">รหัสผ่าน :</label>
							<div class="col-lg-9">
								<input  id = "pwd" type="password" name="pwd" class="form-control">
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-lg-3 col-form-label" for="name">ชื่อ-นามสกุล :</label>
							<div class="col-lg-9">
								<input  id = "name" type="text" name="name" class="form-control">
							</div>
						</div>
						
						<div class="row mb-3">
							<label class="col-lg-3 col-form-label" for="gender">เพศ :</label>
							<div class="col-lg-9">
								<input  id = "m" type="radio" name="gender"  value="m"> ชาย <br>
								<input  id = "f" type="radio" name="gender"  value="f"> หญิง <br>
								<input  id = "o" type="radio" name="gender"  value="o"> อื่นๆ
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-lg-3 col-form-label" for="email">อีเมล :</label>
							<div class="col-lg-9">
								<input  id = "email" type="email" name="email" class="form-control">
							</div>
						</div>
						<div class="mt-3 d-flex justify-content-center">
                    		<button type="submit" class="btn btn-primary  me-2"> <i class="bi bi-box-arrow-in-down"></i> สมัครสมาชิก</button>
							
                		</div>
						
					</div>
					</form>
        			</div>
				</div>
			</div>
		</div>
		
	<br>
	<div align="center"><a href="index.php">กลับไปหน้าหลัก</a></div>	
</body>
</html>		