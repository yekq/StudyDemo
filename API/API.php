<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/20
 * Time: 16:54
 */
include_once ("APIOutPut.php");
include_once ("APIInput.php");
function initApi()
{
    $input=APIInput::getInstance();
    $out=APIOutPut::buildInstance();

    if ($pid=$input->getParamValue("pid") && $t=$input->getParamValue("t"))
    {
        $apiResult["code"]="00";
        $apiResult["msg"]="";
    }else
    {
        $apiResult["code"]="01";
        $apiResult["msg"]="";
    }

    $out->setApiResult($apiResult);
    return$out;
}
