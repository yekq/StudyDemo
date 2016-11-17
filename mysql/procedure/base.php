<?php
/**
 * Created by yekangqi
 * Date: 2016/11/14
 * Time: 16:50
 */

include_once ("../../DataBase/DbHelper.php");

//$db->query('call getResut(2,@input,@input2)');
//$result=$db->query("select @input,@input2");
//while ($row=mysqli_fetch_array($result,MYSQL_ASSOC))
//{
//    echo $row['@input'];
//    echo "\n";
//    echo $row['@input2'];
//}

$ar=array('key0'=>'vaule0','key1'=>'value1','key2'=>'value2','key3'=>'value3');
$ar2=array('0'=>array('key_0'=>'value_0'),'1'=>array('key_1'=>'value_1'));
//foreach ($ar as $value) {
//    echo $value;
//}

//var $index=0;
//foreach ($ar2 as $item) {
//    echo $item->key_0;
//}

//for ($index =0;$index<count($ar2);$index++)
//{
//    $item=$ar2[$index];
//    $key=key($item);
//    echo "这是key:".$key.",这是value:".$item[$key]."\n";
//}

while ($value=current($ar2))
{
    echo $value[key($value)];
    next($ar2);
}