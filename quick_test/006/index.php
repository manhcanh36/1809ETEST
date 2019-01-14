<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình php tính tuổi của 1 người khi biết ngày tháng năm sinh của họ</h1>
    <?php
        $day = isset($_REQUEST['day']) ? (int) $_REQUEST['day'] : '';
        $month = isset($_REQUEST['month']) ? (int) $_REQUEST['month'] : '';
        $year = isset($_REQUEST['year']) ? (int) $_REQUEST['year'] : '';
        if(isset($_REQUEST['day']) && isset($_REQUEST['month'])&& isset($_REQUEST['year'])){
            $ngay_ht = date("Y",time());
            echo '<br>Ngày Hiện Tại: '.$ngay_ht;
            $tuoi = $ngay_ht - $year;
            echo '<br> Tuổi của bạn là: '.$tuoi;
        }
    ?>
<form name="convertdungluong" action="" method="post">
    <P>
        <label>Nhập ngày sinh :</label>
        <input type="text" name="day" value="<?php echo $day; ?>">
    </P>
    <P>
        <label>Nhập tháng sinh :</label>
        <input type="text" name="month" value="<?php echo $month; ?>">
    </P>
    <P>
        <label>Nhập năm sinh :</label>
        <input type="text" name="year" value="<?php echo $year; ?>">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>

</body>
</html>