<?php
/**
 * Created by yekangqi
 * Date: 2016/11/14
 * Time: 16:50
 */

include_once ("../../DataBase/DbHelper.php");

$db->query('call getResut(2,@input,@input2)');
$result=$db->query("select @input,@input2");
while ($row=mysqli_fetch_row($result))
{
    echo $row[0];
    echo "\n";
    echo $row[1];
}