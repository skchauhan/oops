<?php 
include('include/functions.php');	

$obj = new User;
// var_dump($obj);
print_r($obj->fetch_result());

?>