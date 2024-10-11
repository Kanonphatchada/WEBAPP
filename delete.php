<?php
session_start();
if (isset($_SESSION['id']) && $_SESSION['role'] == 'a') {
    $postId = $_GET['id'];
    
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");

    $sql = "DELETE FROM post WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $postId, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        echo "ลบกระทู้หมายเลข $postId สำเร็จ";
    } else {
        echo "เกิดข้อผิดพลาดในการลบกระทู้";
    }

    $conn = null;
} else {
    header("location:index.php");
    die();
}
?>
