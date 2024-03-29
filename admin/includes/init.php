<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT', 'php_examples');

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', 'Php_examples');

defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT.DS.'admin'.DS.'images');


require_once("functions.php");
require_once("config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once("photo.php");
require_once("comment.php");
require_once("session.php");
require_once(INCLUDES_PATH.DS."paginate.php");



?>