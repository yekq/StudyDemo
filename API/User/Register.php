<?php
/**
 * Created by yekangqi
 * Date: 2016/10/24
 * Time: 14:45
 */
include_once ("../../DataBase/DbHelper.php");
include_once ("../API.php");

$out=initApi();
if ($out)
{
    $name =$out->getApiRequest()->name;
    $password=$out->getApiRequest()->password;

    $userExitResult=$db->query("select id from USER WHERE name='$name' and password = '$password'");
    if ($userExitResult->num_rows<=0)
    {
        $nowTime=date("Y-m-d h:i:s",time());
        $insertResult=$db->query("INSERT INTO USER (name, password, time) VALUE ('$name','$password','$nowTime')");
        if ($insertResult)
        {
            $out->setCode(CODE_SUCCESS);
            $out->setMsg("注册成功!");
        }else
        {
            $out->setCode(CODE_FAIL);
            $out->setMsg("用户已经存在!");
        }
    }else
    {
        $out->setCode(CODE_FAIL);
        $out->setMsg("用户已经存在!");
    }
    $out->response();

}