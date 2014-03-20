<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//includes, that could probably be put into bootstrap...

include_once 'lib/core/Functions.php';
include_once getcwd() . DS . 'lib' . DS . 'core' . DS . 'Bootstrap.php';
include_once getcwd() . DS . 'lib' . DS . 'core' . DS . 'Autoloader.php';
include_once getcwd() . DS . 'lib' . DS . 'core' . DS . 'XMLConfig.php';
include_once getcwd() . DS . 'lib' . DS . 'core' . DS . 'models' . DS . 'Index_Database_Data_Mapper_Model.php';
include_once getcwd() . DS . 'lib' . DS . 'core' . DS . 'models' . DS . 'Index_Database_Object_Model.php';
include_once getcwd() . DS . 'lib' . DS . 'core' . DS . 'models' . DS . 'Index_Database_Services_Model.php';

$loader = new Core_Autoloader();
$loader -> registerAutoloader();

Core_Bootstrap::initialize();



