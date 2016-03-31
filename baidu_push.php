<?php 
echo '<p> this is a script to push site to the baidu. </p>';
$urls = array(
    'http://guweihua.yun.93me.com/index.html',
    'http://guweihua.yun.93me.com/about.html',
);
$api = 'http://data.zz.baidu.com/urls?site=guweihua.yun.93me.com&token=H6ZXUs5UTOLles6E';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
