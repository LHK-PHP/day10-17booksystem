<?php
$dsn = "mysql:host=localhost; dbname=psd182; post=3306";
//mysql用户名
$user = "root";
$pwd = "root";
//创建pdo连接数据库 三个参数 地址 用户名 密码
$pdo = new PDO($dsn,$user,$pwd);
$id=$_GET['uid'];
$se= "select * from book where id='$id'";
$res = $pdo->query($se)->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
