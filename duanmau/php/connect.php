<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=du_an_mau_web17311_nhom_5", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "kết nối thành công";
}
catch (PDOException $e) {
    echo "kết nối không thành công: " . $e->getMessage();
}
// dao_product 
// update
$product_id = 1;
$product_name = "Bánh mỳ kẹp thịt & trà sữa";
$product_priec = 15.000;
$product_voucher = "không có voucher";
$product_status = " đang hoạt động  ";
$product_content = "bánh mỳ là món ăn đc yêu chuộng tại Việt Nam!";
$product_comment = "";
$sql = " UPDATE product SET product_id=? 
WHERE product_name=? 
WHERE product_priec=? 
WHERE product_voucher=? 
WHERE product_img=? 
WHERE product_date=? 
WHERE product_likes=? 
WHERE product_status=? 
WHERE product_content=? 
WHERE product_comment=? ";
try {
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($product_id,
        $product_name,
        $product_priec,
        $product_voucher,
        $product_date,
        $product_likes,
        $product_status,
        $product_content,
        $product_comment));
    echo " cập nhật thành công";
}
catch (PDOException $e) {
    echo "cập nhật lỗi ";
}

finally {
    unset($conn);
}
//truy vấn 
// lấy tất cả truy vấn từ product
$sql = "SELECT * FROM product";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll();
// đọc và hiển thị 1 giá trị trong ds trả về 
foreach ($row as $row) {
    echo "<br>" . $row["product_id"];
}
// thêm dữ liệu vào bảng 


























?>
// dao_product