<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = null;

    switch ($operation) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        case '/':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Lỗi: Không thể chia cho 0!";
            }
            break;
        case '^':
            $result = pow($number1, $number2);
            break;
        case 'inv':
            if ($number1 != 0) {
                $result = 1 / $number1;
            } else {
                $result = "Lỗi: Nghịch đảo của 0 không xác định!";
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Tính Toán</title>
</head>
<body>

<h1>Kết Quả Tính Toán</h1>
<p>Kết quả: <?php echo isset($result) ? $result : ''; ?></p>
<a href="index.html">Quay lại</a>

</body>
</html>