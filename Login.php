<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/20
 * Time: 15:14
 */
include_once ("DataBase/DbHelper.php");
include_once ("API/API.php");

$out=initApi();

$result=$db->query("select * from test");

$out->setCode(isset($result)?CODE_SUCCESS:CODE_FAIL);
$ar=array();
while ($row = mysqli_fetch_object($result))
{

    $ar[]=$row;
}
$db->close();

$out->response();