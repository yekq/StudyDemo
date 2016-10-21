<?php
/**
 * Created by yekangqi
 * Date: 2016/10/14
 * Time: 16:38
 */
/* Connect to a MySQL server  连接数据库服务器 */
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

if ($result=mysqli_query($link,"select id as id , name as name from phpdb.test"));
{
/*    while ($row = mysqli_fetch_row($result))
    {
        echo '这是id:'.$row[0].',这是name:'.$row[1];
        echo '<br/>';
    }*/
     echo "<br/>";
    while ($row = mysqli_fetch_object($result))
    {
        echo "这是id:".$row->id.",这是name:".$row->name."<br/>";
    }
}

$insertResult=mysqli_query($link,"insert into phpdb.test(id, name) VALUE (3,'fromcode')");


mysqli_close($link);