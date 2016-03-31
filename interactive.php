<?php
require_once 'robot.php';
$type=$_POST['type'];
$data=$_POST['data'];
switch ($type)
{
case 'robotchat':
  $robot=new robot($data);
  $txt=$robot->quest();
  echo $txt;
  break;
}



