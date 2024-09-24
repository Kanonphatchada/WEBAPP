<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Post</title>
</head>
<body>
	<h1 align="center">Webboard KakKak</h1>
	<hr>
	<center>
	 	<?php 
	 		if ($_GET["id"]%2==0) {
	 			echo "ต้องการดูกระทู้หมายเลข " . $_GET["id"]."<br>";
	 			echo "เป็นกระทู้หมายเลขคู่";
	 		}
	 		else{
	 			echo "ต้องการดูกระทู้หมายเลข " . $_GET["id"]."<br>";
	 			echo "เป็นกระทู้หมายเลขคี่";
	 		}	 		
	 	?>
	</center>
	<br>
	<table style="border: 2px solid black; width: 40%; " align="center">
		<tr style="background-color: #6CD2FE"><td>แสดงความคิดเห็น</td></tr>
		<tr><td align="center"><textarea name="message" rows="10" cols="60"></textarea><input type="submit" value="ส่งข้อความ"></td></tr>		
	</table><br>
	<div align="center"><a href="index.php">กลับไปหน้าหลัก</a></div>

</body>
</html>