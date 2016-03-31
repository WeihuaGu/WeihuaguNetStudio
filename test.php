<?php
require_once 'Request.php';
header("Content-Type: text/html;charset=utf-8");
//$apikey="9baf6412127cc7c4b261af6f4fa8034a";
//$url="http://apis.baidu.com/showapi_open_bus/weixin/weixin_article_list";
//$request=new \Restagent\Request;
//$response = $request->header('Content-Type', 'application/json')->header("apikey", "$apikey")->get($url);
//$data=$response['data'];
//$obj=json_decode($data); 
//$arr=$obj['showapi_res_body'];
//$arr=$arr['pagebean'];
$urltemp="http://tsn.baidu.com/text2audio?lan=zh&cuid=a1b2c3d4ee&ctp=1&tok=24.2d817d1a3417357c4d5f52ce77d60bd1.2592000.1448626807.282335-7144270&tex='ni hao'";
$request=new \Restagent\Request;
$response = $request->header('Content-Type', 'audio/mp3')->get($url);
print_r($response['data']);

