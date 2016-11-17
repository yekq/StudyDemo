<?php
/**
 * Created by yekangqi
 * Date: 2016/11/17
 * Time: 16:38
 */
$name=isset($_GET['name'])?$_GET['name']:"";
$password=isset($_GET['password'])?$_GET['password']:"";

$name=$name.",经过服务器!";
$password=$password."校验通过!";
$result=array("name"=>$name,"password"=>$password);
echo json_encode($result);