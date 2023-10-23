<?php
session_start();

// เชื่อมต่อฐานข้อมูล


include('connect.php');

$id = $_GET['id'];
$query = mysqli_query($con,"SELECT * FROM menu WHERE id = $id");
$result = mysqli_fetch_array($query);



//if ($result->num_rows > 0) {
    //$row = $result->fetch_assoc();
    
    // เพิ่มสินค้าลงในรถเข็น
    if (!isset($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = array();
    }
    
    array_push($_SESSION["shopping_cart"], $result);
    
    // กลับไปที่หน้าแสดงรายการสินค้า
    header("Location: rachasawei.php");
//} else {
   // echo "ไม่พบสินค้า";
//}


?>
