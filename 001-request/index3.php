<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form name="conver" action="" method="post">
        <p>
            <input type="text" name="capacity" placeholder="Nhập vào dung lượng cần chuyển từ gigabyte" value="<?php
                if(isset($_REQUEST['capacity'])){
                    echo $_REQUEST['capacity'];
                }else{
                    echo '';
                }
            ?>">
        </p>
        <p>
            <input type="submit" name="submit" value="submit">
        </p>
    </form>
<?php
    /*
        chuyển từ gigabyte:
            1- thành megabyte
            2- thành byte
            3- thành bit
     */
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

    if(isset($_REQUEST['capacity'])){
        echo "Megebyte: ". $val=$_REQUEST['capacity'] * pow(10,-6).'<br>';
        echo "Byte: ". $val1=$_REQUEST['capacity'] * pow(10,0).'<br>';
        echo "Bit: ". $val2=$_REQUEST['capacity'] * pow(10,-9).'<br>';
    }else{
        echo 'Chưa Nhập Vào!';
    }

?>
</body>
</html>
