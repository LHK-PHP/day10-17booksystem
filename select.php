<?php
$dsn = "mysql:host=localhost; dbname=psd182; post=3306";
//mysql用户名
$user = "root";
$pwd = "root";
//创建pdo连接数据库 三个参数 地址 用户名 密码
$pdo = new PDO($dsn,$user,$pwd);
$sename = $_GET['sename'];
$selectsql = "select name from username";
$ress = $pdo->query($selectsql)->fetchAll(PDO::FETCH_ASSOC);
//print_r($ress);
echo json_encode($ress);
//

//删除书的信息
//$id = $_GET['id'];
//echo $id;
//$de_book = "DELETE FROM book WHERE id= '$id'";
//$res = $pdo->exec($de_book);
//echo json_encode($res);