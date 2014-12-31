<?php
header('Content-type: text/html; charset=utf-8');
include '../inc.php';
//模拟客户端调用服务端Service
$socket = new THttpClient($_SERVER['HTTP_HOST'], 80, '/index.php?srv=BookManage_Impl');
$transport = new TBufferedTransport($socket, 1024, 1024);
$protocol = new TBinaryProtocol($transport);
$transport->open();
//创建Service Client对象
$bookClient = new BookManageClient($protocol);
//调用远程接口
$booklist = $bookClient->bookList();
echo "现有书：";
var_dump($booklist);
$transport->close ();
