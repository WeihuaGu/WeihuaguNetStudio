<?php 
	
	require_once 'Request.php';
	header("Content-Type: text/html;charset=utf-8");
	$apikey="bc06e254e6da972a67419dcc7e96b19d";
	$url="http://v.juhe.cn/todayOnhistory/queryEvent.php";
	$request=new \Restagent\Request;
	$geturl=$url."?key=".$apikey."&date=".date("n")."/".date("j");
	$response = $request->get($geturl);
	$data=$response['data'];
	$obj=json_decode($data); 
	$arr=$obj->result;
	$i=0;
	$li=array();
	foreach ($arr as $lish){
	$li[$i]=get_object_vars($lish);
	$i++;
	}
	$things="事件:";
	$content="内容";
        $time='时间:';
	$num=count($li)*0.4;
        $li=array_slice($li,0,$num);
	foreach($li as $lish){
	echo '<li class="collection-item avatar">';
	echo "$time".$lish['date']."<br/>";
	$title="$things".$lish['title']."<br/>";
        $tar="historydetail.php?id=".$lish['e_id'];
	echo "<a href=$tar> $title </a>";
	echo '</li>';
	}
	




?>
