<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/20
 * Time: 16:08
 */

class APIOutPut{

    private $apiResult;
    /**
     * APIOutPut constructor.
     */
    public function __construct()
    {

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

    /**
     * @return mixed
     */
    public function getApiResult()
    {
        return $this->apiResult;
    }

    /**
     * @param mixed $apiResult
     */
    public function setApiResult($apiResult)
    {
        $this->apiResult = $apiResult;
    }



}