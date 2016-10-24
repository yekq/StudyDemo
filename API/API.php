<?php
/**
 * Created by yekangqi
 * Date: 2016/10/20
 * Time: 16:54
 */
include_once ("APIOutPut.php");
include_once ("APIInput.php");
include_once ("AESHelper.php");

function initApi()
{
    $input=APIInput::getInstance();
    $out=APIOutPut::buildInstance();

//    $sig=$input->getParamValue(PARAM_SIG);
    $v=$input->getParamValue(PARAM_VERSION);
    $t=$input->getParamValue(PARAM_TIME);
    $data=strtr($input->getParamValue(PARAM_DATA),array(' ' => '+' ));
//    echo "sig:".$sig."<br/>,v:".$v."<br/>,time:".$t."<br/>,data:".$data."<br/>";

    if ($v && $t && $data)
    {
        //验证参数 TODO yekangqi

        //验证成功
        $out->setCode(CODE_SUCCESS);
        $out->setMsg(MSG_VERIFY_PASS);
        //解密
        $md5Data=$v.Android_KEY.$t;
//        echo "md5Data:".$md5Data."<br/>";
        $md5=strtoupper(md5($md5Data));
//        echo "md5:".$md5."<br/>";
        $key=substr($md5,8,16);
//        echo "key:".$key."<br/>";
        $desData=AESHelper::decryptString($data,$key);
//        echo "desData:".$desData."<br/>";
        $requestDesData=json_decode($desData);
        if ($requestDesData)
        {
            $out->setApiRequest($requestDesData);
            $out->setAESKey($key);
            return $out;
        }else
        {
            $out->setCode(CODE_FAIL);
            $out->setMsg(MSG_PARAM_FAIL);
            $out->response();
            return false;
        }
    }else
    {
        $out->setCode(CODE_FAIL);
        $out->setMsg(MSG_PARAM_FAIL);
        $out->response();
        return false;
    }

}
