<?php
$dsn = "mysql:host=localhost; dbname=psd182; post=3306";
//mysql用户名
$user = "root";
$pwd = "root";
//创建pdo连接数据库 三个参数 地址 用户名 密码
$pdo = new PDO($dsn,$user,$pwd);
$name = $_GET['name'];
$pwd = $_GET['pwd'];
$select = 'select * from username';
$ress = $pdo->query($select)->fetchAll(PDO::FETCH_ASSOC);
//print_r($ress);
echo json_encode($ress);