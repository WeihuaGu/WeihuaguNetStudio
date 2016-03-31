<?php
$type=$_POST['type'];
$data=$_POST['data'];
switch ($type)
{
case 'guestbook':
   $fp=fopen("guestbook.txt",a);
    $time=time();
   // $json=array(
	//	"time"=>$time,
		//"gestbook"=>$data);
   fwrite($fp,"//"."time is :".$time." 留言:".$data."\n");
   fclose();
   echo "type is ".$type."time is $date\n";
   echo"你的留言已经提交,内容为\n";
   echo $data;
  break;
}
