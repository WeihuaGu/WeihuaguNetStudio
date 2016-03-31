<?php
	require_once 'Request.php';
	header("Content-Type: text/html;charset=utf-8");
	echo '<head>';
	require_once 'header.php';
	echo '</head>';
	echo '<body class="typo">';
	echo '<div class="container">';
	getdetail($_GET['id']);
	echo '</div>';
	echo '</body>';


function getdetail($id){
	$apikey="bc06e254e6da972a67419dcc7e96b19d";
	$url="http://v.juhe.cn/todayOnhistory/queryDetail.php";
	$request=new \Restagent\Request;
	$geturl=$url."?key=".$apikey."&e_id=".$id;
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
       $li=$li[0];
       $title=$li['title'];
       $pic=$li['picUrl'];
       $content=$li['content'];
	show($title,$content,$pic);

 }
function show($title,$content,$pic){
	echo '<ul class="collection with-header">';
	echo '<li class="collection-header"><h4>'.$title.'</h4></li>';
	echo '<li class="collection-item"><p>'.$content.'</p></li>';
	echo '<li class="collection-item">';
        echo '<span>';
	foreach($pic as $item){
	echo '<div class="card">';
	echo "<img src=$item->url alt=$item->pic_title />";
	echo '</div>';
	}	

	echo '</span>';
	echo '</li>';
	echo '</ul>';
        



}
