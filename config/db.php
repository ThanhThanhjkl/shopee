<?php
$connect = mysqli_connect('localhost', 'root','','shopee');
if ($connect) {
    mysqli_query($connect, "SET NAMES 'UTF8'");
} else {
}
?>