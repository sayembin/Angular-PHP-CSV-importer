<?php
require_once(__DIR__.'/autoloader.php');

$settings = \Config\config::getConfig();
$task = '';
if(isset($_GET['task'])){
    $task = $_GET['task'];
}
header( "Location: ".$settings['base_url']."/controller".DIRECTORY_SEPARATOR."controller.php?task=".$task,false );