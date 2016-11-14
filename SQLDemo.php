<?php
/**
 * Created by yekangqi
 * Date: 2016/10/14
 * Time: 16:38
 */
/* Connect to a MySQL server  连接数据库服务器 */
include_once ('mysql/SQLHelper.php');

if ($result=mysqli_query($link,"select id as id , name as name from phpdb.user"));
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