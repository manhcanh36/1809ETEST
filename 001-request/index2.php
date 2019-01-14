<?php
/**

 */
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
if(isset($_REQUEST['thamso1'])&&isset($_REQUEST['thamso2'])){
    echo 'Tổng :' .$val=$_REQUEST['thamso1'] + $_REQUEST['thamso2'] .'<br>';
    echo 'Hiệu :' .$val1=$_REQUEST['thamso1'] - $_REQUEST['thamso2'] .'<br>';
    echo 'Tích :' .$val2=$_REQUEST['thamso1'] * $_REQUEST['thamso2'] .'<br>';
    echo 'Thương :' .$val3=$_REQUEST['thamso1'] / $_REQUEST['thamso2'] .'<br>';
}else{
    echo 'Chưa Có Tham Số!';
}