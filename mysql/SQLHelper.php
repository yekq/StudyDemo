<?php
/**
 * Created by yekangqi
 * Date: 2016/11/14
 * Time: 16:51
 */
$link = mysqli_connect(
    'localhost',  /* The host to connect to 连接MySQL地址 */
    'root',      /* The user to connect as 连接MySQL用户名 */
    'root',  /* The password to use 连接MySQL密码 */
    'phpdb');    /* The default database to query 连接数据库名称*/

if (!$link) {
    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
    exit;
}else{
    echo "connect db success!!!";
}