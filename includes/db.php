<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "devwork2121";
$db['db_name'] = "cmsdata";

foreach($db as $key => $value){
     define(strtoupper($key),$value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($connection){
     echo "we are connected"; 
}