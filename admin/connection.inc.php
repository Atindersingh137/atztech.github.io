<?php
session_start();
$con=mysqli_connect("localhost:3306","atztech_admin","@navneet@","atz-tech");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/Assignment8/atztech/');
define('SITE_PATH','http://127.0.0.1/Assignment8/atztech/');
