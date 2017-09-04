<?php
// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-gii-flatty_new/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
echo 'Hello';
<<<<<<< HEAD
=======

echo 'Hello3';
>>>>>>> 05318661f4c90b123a3e14ee0e4e83c6becf308c
