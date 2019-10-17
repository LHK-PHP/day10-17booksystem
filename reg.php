<?php
$dsn = "mysql:host=localhost; dbname=psd182; post=3306";
//mysql用户名
$user = "root";
$pwd = "root";
//创建pdo连接数据库 三个参数 地址 用户名 密码
$pdo = new PDO($dsn,$user,$pwd);
$name = $_POST['name'];
$pwd = $_POST['pwd'];
//用户输入的数据添加到数据库
$addsql = "insert into username values (null,'$name','$pwd')";
$pdo->exec($addsql);
//$res = $pdo->query($addsql)->fetchAll(PDO::FETCH_ASSOC);

