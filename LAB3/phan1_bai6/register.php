<?php
$errors = [];
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $about = trim($_POST['about']);

    // Kiểm tra các trường
    if (strlen($firstName) < 2 || strlen($firstName) > 30) {
        $errors[] = "First name phải từ 2 đến 30 ký tự.";
    }

    if (strlen($lastName) < 2 || strlen($lastName) > 30) {
        $errors[] = "Last name phải từ 2 đến 30 ký tự.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email không hợp lệ.";
    }

    if (strlen($password) < 2 || strlen($password) > 30) {
        $errors[] = "Password phải từ 2 đến 30 ký tự.";
    }

    if (!checkdate($month, $day, $year)) {
        $errors[] = "Ngày sinh không hợp lệ.";
    }

    if (empty($gender)) {
        $errors[] = "Vui lòng chọn giới tính.";
    }

    if (empty($country)) {
        $errors[] = "Vui lòng chọn quốc gia.";
    }

    if (strlen($about) > 10000) {
        $errors[] = "About không được vượt quá 10000 ký tự.";
    }

    // Nếu không có lỗi, hiển thị thông điệp thành công
    if (empty($errors)) {
        $successMessage = "Complete!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Đăng Ký</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Kết Quả Đăng Ký</h1>
    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else: ?>
        <div class="alert alert-success">
            <strong><?php echo $successMessage; ?></strong>
        </div>
    <?php endif; ?>
    <a href="index.html" class="btn btn-primary">Quay lại</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>