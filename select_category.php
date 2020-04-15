<?php
require_once 'connectDB.php';

$conn = connectDB();

$sql = "select cateId, cateName from category";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Id:". $row['cateId']." --- CategoryName: ".$row['cateName']."<br/>";
    }
} else {
    echo "0 results";
}

// Đóng câu lệnh
mysqli_stmt_close($stmt);
mysqli_close($conn);


?>