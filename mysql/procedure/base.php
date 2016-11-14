<?php
/**
 * Created by yekangqi
 * Date: 2016/11/14
 * Time: 16:50
 */

include_once ("../../DataBase/DbHelper.php");

$db->query('call getResut(1,@input)');
$result=$db->query("select @input");
//echo $result;
while ($row=mysqli_fetch_row($result))
{
    echo "\n";
    echo $row[0];
}