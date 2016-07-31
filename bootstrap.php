<?php
require_once(__DIR__.'/autoloader.php');
require_once __DIR__."/vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Config\config as con;


function getEntityManager()
{
    $config = con::getConfig();
    $paths = array(
        __DIR__ . "/Models/Entity/"
    );
    $isDevMode = 'true';
    // the connection configuration
    $dbParams = array(
        'driver' => 'pdo_mysql',
        'user' => $config['user'],
        'password' => $config['password'],
        'host' => $config['host'],
        'dbname' => $config['dbname'],
    );

    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
    return EntityManager::create($dbParams, $config);
}

$entityManager = getEntityManager();


