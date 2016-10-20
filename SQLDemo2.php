<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/18
 * Time: 16:42
 */
$conn=mysqli_connect("localhost","root","root","phpdb");
$result=mysqli_query($conn,"SELECT * FROM phpdb.test");
while ($row = mysqli_fetch_row($result))
{
    echo $row[0]."\n";
}

//$obj=array("A_key"=>"A_value","B_key"=>"B_value");
//echo json_encode($obj);