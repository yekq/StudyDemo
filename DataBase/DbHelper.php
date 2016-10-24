<?php
/**
 * Created by yekangqi
 * Date: 2016/10/20
 * Time: 15:15
 */
$db=DbHelper::getInstance();
class DbHelper
{

    private static $_instance;

    private $con;
    /**
     * DbHelper constructor.
     */
    public function __construct()
    {

        $this->con = mysqli_connect(
            'localhost',  /* The host to connect to 连接MySQL地址 */
            'root',      /* The user to connect as 连接MySQL用户名 */
            'root',  /* The password to use 连接MySQL密码 */
            'phpdb');    /* The default database to query 连接数据库名称*/
    }

    public static function getInstance(){
        if(!(self::$_instance instanceof self)){
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    public function query($sql)
    {
//        echo "查询".$sql."<br/>";
        $result=mysqli_query($this->con,$sql);
//        echo "结果:"."<br/>";
//        echo var_dump($result);
        return $result;
    }

    public function getConnection(){
        return $this->con;
    }


    public function close()
    {
        mysqli_close($this->con);
    }


}