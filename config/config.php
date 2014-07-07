<?php

// symfony directories
//$sf_symfony_lib_dir  = '//PEAR/symfony';
//$sf_symfony_data_dir = '//PEAR/data/symfony';

$sf_symfony_lib_dir  = dirname(__FILE__).'/../lib/vendor/symfony/lib';
$sf_symfony_data_dir = dirname(__FILE__).'/../lib/vendor/symfony/data';

$sf_lib_dir  = dirname(__FILE__).'/../lib';

require_once($sf_symfony_lib_dir.DIRECTORY_SEPARATOR.'addon'.DIRECTORY_SEPARATOR.'propel'.DIRECTORY_SEPARATOR.'sfPropelBehavior.class.php');

sfPropelBehavior::registerHooks('log', array(
  ':delete:pre' => array('LogBehavior', 'preDelete'),
  ':save:pre' => array('LogBehavior', 'preSave'),
));
