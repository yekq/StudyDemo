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
        $out->setCode(CODE_SUCCESS);
        $out->setMsg(MSG_VERIFY_PASS);
    }else
    {
        $out->setCode(CODE_FAIL);
        $out->setMsg(MSG_PARAM_FAIL);
    }

    return $out;
}
