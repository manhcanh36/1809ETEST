<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
    $day = isset($_REQUEST['day']) ? (int) $_REQUEST['day'] : '';
    $month = isset($_REQUEST['month']) ?(int) $_REQUEST['month'] : '';
    $year = isset($_REQUEST['year']) ? (int) $_REQUEST['year'] : '';
    if(isset($_REQUEST['day'])&& isset($_REQUEST['month'])&& isset($_REQUEST['year'])){
        $day_timestamp = time();
        $current_day = date("d/m/Y",time());
        echo '<br> Ngày hiện tại: '. date("d",time());
        echo '<br> Tháng hiện tại: '. date("m",time());
        echo '<br> Năm hiện tại: '. date("Y",time());
        $birthday = $day .'/'.$month.'/'. date("Y",time());
        echo '<br> Sinh nhật của người đó trong năm nay: '. $birthday;
        $dtime = DateTime::createFromFormat("d/m/Y",$birthday);
        $timestamp = $dtime->getTimestamp();
        echo '<br>Sinh nhật người đó theo timestamp' .$timestamp;
        $day_birthday = 0;
        if($day_timestamp > $timestamp){
            echo '<br>Đã qua sinh nhật rồi!!';
            $birthday_sau= $day.'/'.$month.'/'.date("Y",time()+1);
            echo '<br>SInh nhật người đó trong năm sau: '.$birthday_sau;
            $next_birthday = DateTime::createFromFormat("d/m/Y",$birthday_sau);
            $next_timestamp = $next_birthday->getTimestamp();
            echo '<br> SInh nhật người đó trong năm sau theo timestamp: '.$next_timestamp;
            $day_birthday = $next_timestamp - $day_timestamp;
        }else{
            echo '<br> Sắp đến Sinh nhật người đó: ';
            $day_birthday = $timestamp - $day_timestamp;
        }
        echo '<br> Thời Gian sinh nhật sắp tới theo giây: '. $day_birthday;
        echo '<br> Thời Gian sinh nhật sắp tới theo phút: '. (int) ($day_birthday/60);
        echo '<br> Thời Gian sinh nhật sắp tới theo giờ: '. (int) ($day_birthday/(60*60));
        echo '<br> Thời Gian sinh nhật sắp tới theo ngày: '. (int) ($day_birthday/(60*60*24));
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
<p>Tính xem còn bao nhiêu ngày nữa là đến sinh nhật của người ấy</p>
<?php
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
?>

</body>
</html>
