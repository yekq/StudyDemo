<!--/**
 * Created by yekangqi
 * Date: 2016/10/14
 * Time: 10:33
 */-->

<?php
//测试数组
//$cars=array("aCar","bCar");
//array_push($cars,"cCar");
//$carLength=count($cars);
//echo "长度是:".$carLength;
//for ($index=0;$index<$carLength;$index++) {
//    echo $cars[$index];
//}

//demo
/*$cars=array("Volvo","BMW","SAAB");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++) {
    echo $cars[$x];
    echo "<br>";
}*/

//测试数组2
//$ar=array();
//for ($i=0;$i<10;$i++)
//{
//    array_push($ar,"第".$i."个");
//}
//foreach ($ar as $key=>$value)
//{
//    echo "key:".$key.",value:".$value."<br/>";
//}

//$arr_age = array("wang"=>18, "li"=>20, "zhang"=>25);
//foreach ($arr_age as $age) {
//    $age = $age+10;
//    echo $age,'<br />';
//}
//// 输出原数组
//print_r($arr_age);

//$muArr=array("a_key_array"=>array("a1"=>"value_a1","b1"=>"value_b1")
//,"b_key_obj"=>"ca");
//var_dump($muArr);
//$muArr["a_key_array"]["b1"]="change_to_b2";
//echo $muArr["a_key_array"]["b1"];

//echo "现在的时间是:".date("Y-M-D-H:m:s");

////文件 读取
//$myfile = fopen("localFile.txt", 'rw') or die('Unable to open file!');
//while (!feof($myfile))
//{
//    echo fgets($myfile)."<br/>";
//}
//fclose($myfile);

////文件写
//$file = fopen('localFile.txt','w') or die('Unable to open file!');
//for ($i=0;$i<10;$i++)
//{
//    fwrite($file,"这是第".$i."行\n");
//}
//fclose($file);