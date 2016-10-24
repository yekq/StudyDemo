<?php
/**
 * Created by yekangqi
 * Date: 2016/10/24
 * Time: 16:14
 */
include_once ("../../DataBase/DbHelper.php");
include_once ("../API.php");

$out=initApi();
if ($out)
{
    $name =$out->getApiRequest()->name;
    $password=$out->getApiRequest()->password;

    $userExitResult=$db->query("select id ,name from USER WHERE name='$name' and password = '$password'");
    if ($userExitResult->num_rows>0)
    {
        $row=mysqli_fetch_object($userExitResult);
        $out->setCode(CODE_SUCCESS);
        $out->setMsg("登陆成功!".$row->id);

        $result=array("id"=>$row->id);
        $out->setData($result);
    }else
    {
        $out->setCode(CODE_FAIL);
        $out->setMsg("用户不存在!");
    }
    $out->response();

}