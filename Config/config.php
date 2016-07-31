<?php

namespace Config;

/**
 * this is a configuration class to configure your app settings in here
 * Class config
 *
 * @package TodoApp\config
 * @author Md.Sayem bin hasan <sayemdoc@gmail.com>
 */
class config
{

	/**
	 * this method returns the todoapp settings array
	 * you can configure settings array here
	 *
	 * @return Array
	 */
	public static function  getConfig()
	{
		$host='';
		if (isset($_SERVER['HTTP_HOST']) === TRUE) {
			$host = $_SERVER['HTTP_HOST'];
		}
		return array(
			'host'=>'127.0.0.1',
			'user'=>'root',
			'password'=>'root',
			'dbname'=>'test',
			'base_url'=> 'http://'.$host.DIRECTORY_SEPARATOR.'develop/dev-test',
		);
	}
}
