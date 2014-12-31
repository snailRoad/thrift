<?php

chdir(__DIR__);
header('Content-Type: text/html; charset=utf-8');

require 'ThriftLib/Thrift.php';
require $GLOBALS['THRIFT_ROOT'].'/protocol/TBinaryProtocol.php';
require $GLOBALS['THRIFT_ROOT'].'/transport/TSocket.php';
require $GLOBALS['THRIFT_ROOT'].'/transport/TServerSocket.php';
require $GLOBALS['THRIFT_ROOT'].'/transport/THttpClient.php';
require $GLOBALS['THRIFT_ROOT'].'/transport/TMemoryBuffer.php';
require $GLOBALS['THRIFT_ROOT'].'/transport/TTransportFactory.php';
require $GLOBALS['THRIFT_ROOT'].'/transport/TPhpStream.php';
require $GLOBALS['THRIFT_ROOT'].'/server/TSimpleServer.php';
//服务器端接口文件
require 'Thrifts/gen-php/BookManage.php';