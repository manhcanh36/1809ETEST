<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div>
    $student = array(); <br>
    $student[] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7); <br>
    $student[] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8); <br>
    $student[] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9); <br>
    $student[] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7); <br>
    $student[] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1); <br>
    $student[] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3); <br>
    $student[] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5); <br>
    $student[] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8); <br>
    $student[] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9); <br>

    Hãy dùng dữ liệu sau và vòng lặp foreach để in ra 1 table thông tin của các sinh viên này
    và xếp loại của họ dự tên số điểm mà họ có
</div>
<?php
$student = array();
$student[] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7);
$student[] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8);
$student[] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9);
$student[] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7);
$student[] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1);
$student[] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3);
$student[] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5);
$student[] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8);
$student[] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9);
?>
<table>
    <tr>
        <?php foreach ($student as $val) {
            if (is_array($val)) {
                foreach ($val as $v) {
                    echo $v;
                }
            } else
                echo $val . "<br>";
        }
        ?>
    </tr>
</table>

</body>
</html>