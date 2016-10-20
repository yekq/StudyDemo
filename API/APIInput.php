<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/20
 * Time: 16:56
 */
echo "这是:APIInput.PHP\n";
class APIInput{
    private static $_instance;
    /**
     * APIInput constructor.
     */
    public function __construct()
    {

    }

    function getParamValue($name)
    {
        if (isset($_GET[$name]))
        {
            return $_GET[$name];
        }else
        {
            return null;
        }
    }

    public static function getInstance()
    {
        if (!self::$_instance instanceof self)
        {
            self::$_instance=new self;
        }
        return self::$_instance;

    }
}

