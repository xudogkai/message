<?php 
header("content-type:text/html;charset=utf-8");
define('APP_HOST',$_SERVER['HTTP_HOST']);
$controller = isset($_GET['c'])?ucfirst($_GET['c']):"Index";
$action = isset($_GET['a'])?$_GET['a']:"index";
$config = include ("./config.php");
include ('./model/Db.php');
include ('./function.php');
include ('./Controller/Controller.php');
$controller = 'Controller\admin\\'.$controller;
// var_dump($controller);die;
$obj = new $controller();

$obj->$action();