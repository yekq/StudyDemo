<?php
/**
 * Created by yekangqi
 * Date: 2016/10/20
 * Time: 15:14
 */
include_once ("DataBase/DbHelper.php");
include_once ("API/API.php");

$out=initApi();
if ($out)
{

//    $result=$db->query("select * from test");
//    $out->setCode(isset($result)?CODE_SUCCESS:CODE_FAIL);
//    $ar=array();
//    while ($row = mysqli_fetch_object($result))
//    {
//
//        $ar[]=$row;
//    }

    $name =$out->getApiRequest()->name;
    $password=$out->getApiRequest()->password;

    $out->setCode(2);
    $out->setMsg("结果:".$name.$password);
    $db->close();

    $out->response();
}
