<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/20
 * Time: 16:08
 */
include_once ("APIConstant.php");
class APIOutPut{

    private $apiResult;
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

//    public function response($result)
//    {
//
//        $model=array("code"=>"01","msg"=>"消息","data"=>$result);
//        echo json_encode($model);
//    }

    public function response()
    {
        echo json_encode($this->apiResult);
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



}