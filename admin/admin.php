<?php
include'db_conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_admin WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "admin sayfasına hoş geldiniz. ".$row['isim'];
} else {
    echo "Geçersiz kullanıcı adı veya parola.";
}

$stmt->close();
$conn->close();
?>
