<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="jqajax";


$conn= new mysqli($db_host,$db_user,$db_password,$db_name);

if($conn->connect_errno){
    echo "Failed to Connect sql:".$conn->connect_errno;
    exit();
}


?>