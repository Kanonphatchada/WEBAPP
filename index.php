<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Webboard</title>
</head>
 
<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">Webboard KakKak</h1>
        <?php include "nav.php" ?>
        <div class="mt-3">
    <label>หมวดหมู่</label>
    <span class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            --ทั้งหมด--
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
            <li><a class="dropdown-item" href="#">เรื่องเรียน</a></li>
            <li><a class="dropdown-item" href="#">เรื่องทั่วไป</a></li>
        </ul>
    </span>
   
        <?php if(isset($_SESSION['id']) && $_SESSION['role'] != 'b') {
            echo "<a href='newpost.php' class='btn btn-success btn-sm' style='float: right'>";
            echo "<i class='bi bi-plus'></i> สร้างกระทู้ใหม่</a>";
        }
        ?>
</div>

        <table class="table table-striped mt-4">
                <ul>
            <?php
            for ($i = 1; $i <= 10; $i = $i + 1) {
                echo "<tr><td><a href=post.php?id=$i style='text-decoration:none' >กระทู้ที่ $i </a>";
                if (isset($_SESSION['id']) && $_SESSION['role'] == 'a') {
                    echo "&nbsp;&nbsp;<a href='delete.php?id=$i' 
                    class='btn btn-danger btn-sm me-3'style='float:right'><i class='bi bi-trash-fill'></i></a>" ;
                }
                echo "</td></tr>";
            }
            ?>
 
 
                </ul>
        </table>
 
   
    </div>
</body>
 
</html>