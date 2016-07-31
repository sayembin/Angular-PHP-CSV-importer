<?php

require_once (__DIR__.'/vendor/autoload.php');
/**
 *  this method autoload the classes of the app
 *
 * @param $className fully qualified class name
 */

function autoload($className)
{
	$className = ltrim($className, '\\');
	$fileName = '';
	$namespace = '';
	if ($lastNsPos = strrpos($className, '\\')) {
		$namespace = substr($className, 0, $lastNsPos);
		$className = substr($className, $lastNsPos + 1);
		$fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
	}
	$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
   //echo $fileName.'<br/>';
	require_once (__DIR__.'/'.$fileName);
}

spl_autoload_register('autoload');


