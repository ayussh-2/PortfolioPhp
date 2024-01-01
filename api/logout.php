<?php
session_start();

$_SESSION = array();

session_destroy();

$response = array("success"=>"logoutSuccesfull");

echo json_encode($response);
exit();
?>
