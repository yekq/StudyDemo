<?php
/**
 * Created by yekangqi
 * Date: 2016/10/20
 * Time: 16:08
 */
include_once ("APIConstant.php");
class APIOutPut{

    //请求
    private $apiRequest;
    //结果
    private $apiResult;
    //加密key
    private $AESKey;
    /**
     * APIOutPut constructor.
     */
    public function __construct()
    {
        $this->apiResult[KEY_CODE]="";
        $this->apiResult[KEY_MSG]="";
        $this->apiResult[KEY_DATA]="";
    }

    public static function buildInstance()
    {
//        if(!(self::$_instance instanceof self)){
//            self::$_instance = new self;
//        }
//        return self::$_instance;
        return new self();
    }


    public function response()
    {

        echo AESHelper::encryptString(json_encode($this->apiResult,JSON_UNESCAPED_UNICODE),$this->AESKey);
    }

    public function setCode($code)
    {
        $this->apiResult[KEY_CODE]=$code;
    }

    public function setMsg($msg)
    {
        $this->apiResult[KEY_MSG]=$msg;
    }

    public function setData($data)
    {
        $this->apiResult[KEY_DATA]=$data;
    }


    public function getApiRequest()
    {
        return $this->apiRequest;
    }

    public function setApiRequest($apiRequest)
    {
        $this->apiRequest = $apiRequest;
    }

    public function setAESKey($AESKey)
    {
        $this->AESKey = $AESKey;
    }




}