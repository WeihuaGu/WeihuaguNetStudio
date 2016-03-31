<?php
require_once 'header.php'; 
$file = file('guestbook.txt'); 
foreach ($file as $line){ 
      echo $line; 
      echo '</br>';
    } 
