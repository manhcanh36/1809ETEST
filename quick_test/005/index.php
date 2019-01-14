<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình php in ra độ dài của chuỗi bạn nhập vào ?
    Xây dựng 1 form có 1 ô input cho người dùng nhập chuỗi . sau khi họ ấn enter sẽ hiện ra độ dài của chuỗi</h1>

<?php
    if(isset($_REQUEST['day'])){
        $chuoi= strlen($_REQUEST['day']);
        echo "<br> Độ dài chuỗi: " .$chuoi;
    }
?>
<form name="chuoi" action="" method="post">
    <P>
        <label>Nhập Chuỗi:</label>
        <input type="text" name="day" value="">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>

</body>
</html>