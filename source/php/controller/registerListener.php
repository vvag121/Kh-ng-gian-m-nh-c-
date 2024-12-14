<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/dao/accessDB.php");

$email = $_POST['txtUser'];
$password = $_POST['txtPass'];
$birthday = $_POST['txtBirthday'];
$address = $_POST['txtAddress'];
$nameListener = $_POST['txtName'];  // Gán giá trị từ form

// Kiểm tra nếu tài khoản đã tồn tại trong cơ sở dữ liệu
if (checkLogin(new Account($email, $password)) == false) {
    // Nếu tài khoản chưa tồn tại, tiếp tục đăng ký
    if (addListener($email, $nameListener, $birthday, $address)) {
        // Nếu thêm thông tin vào bảng listener thành công, tiếp tục tạo tài khoản
        if (addAccount($email, $password)) {
            $_SESSION['message'] = 'Đăng ký thành công! Bạn có thể đăng nhập ngay.';
            header("Location: ../view/login.php");
            exit();  // Thêm exit để dừng script và chuyển hướng ngay
        } else {
            $_SESSION['error'] = 'Đã xảy ra lỗi trong quá trình tạo tài khoản.';
            header("Location: ../view/register.php");
            exit();
        }
    } else {
        $_SESSION['error'] = 'Đã xảy ra lỗi trong quá trình đăng ký người dùng.';
        header("Location: ../view/register.php");
        exit();  // Nếu có lỗi khi thêm vào bảng listener
    }
} else {
    // Nếu tài khoản đã tồn tại
    $_SESSION['error'] = 'Email đã tồn tại. Vui lòng thử email khác.';
    header("Location: ../view/register.php");
    exit();  // Dừng script và quay lại trang đăng ký
}
?>
