<?php
$dsn = "mysql:host=localhost; dbname=psd182; post=3306";
//mysql用户名
$user = "root";
$pwd = "root";
//创建pdo连接数据库 三个参数 地址 用户名 密码
$pdo = new PDO($dsn,$user,$pwd);
//修改书籍信息
$bookname= $_GET['bname'];
$bookauthor=$_GET['bauthor'];
$id = $_GET['id'];
echo $bookname;
echo $bookauthor;
echo $id;
$up = "update book set book_name='$bookname',book_author='$bookauthor' where id='$id'";
$book_res = $pdo->query($up)->fetchAll(PDO::FETCH_ASSOC);
//echo json_encode($book_res);