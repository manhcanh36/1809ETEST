<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>1 . Viết ra 1 chương trình chuyển hướng khi người dùng chọn trang và click submit</h1>

<?php
    if(isset($_REQUEST['web'])){
        $url = $_REQUEST['web'];
        header('location:'.$url);
    }
?>
<form name="aa" method="post" action="">
    <p>
        Nhập trang web cần chuyển hướng đến :
        <input type="text" name="web" value="">
    </p>
    <input type="submit" value="Chuyển hướng">
</form>






</body>
</html>