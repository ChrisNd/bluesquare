<?php
// auto-generated by sfRoutingConfigHandler
// date: 2014/07/07 16:38:21
$routes = sfRouting::getInstance();
$routes->setRoutes(
array (
  'signup' => 
  array (
    0 => '/signup',
    1 => '#^/signup$#',
    2 => 
    array (
    ),
    3 => 
    array (
    ),
    4 => 
    array (
      'module' => 'user',
      'action' => 'signup',
    ),
    5 => 
    array (
    ),
    6 => '',
  ),
  'login' => 
  array (
    0 => '/login',
    1 => '#^/login$#',
    2 => 
    array (
    ),
    3 => 
    array (
    ),
    4 => 
    array (
      'module' => 'user',
      'action' => 'login',
    ),
    5 => 
    array (
    ),
    6 => '',
  ),
  'requestPassword' => 
  array (
    0 => '/request-password',
    1 => '#^/request-password$#',
    2 => 
    array (
    ),
    3 => 
    array (
    ),
    4 => 
    array (
      'module' => 'user',
      'action' => 'requestPassword',
    ),
    5 => 
    array (
    ),
    6 => '',
  ),
  'report' => 
  array (
    0 => '/report',
    1 => '#^/report$#',
    2 => 
    array (
    ),
    3 => 
    array (
    ),
    4 => 
    array (
      'module' => 'user',
      'action' => 'report',
    ),
    5 => 
    array (
    ),
    6 => '',
  ),
  'homepage' => 
  array (
    0 => '/',
    1 => '/^[\\/]*$/',
    2 => 
    array (
    ),
    3 => 
    array (
    ),
    4 => 
    array (
      'module' => 'user',
      'action' => 'login',
    ),
    5 => 
    array (
    ),
    6 => '',
  ),
  'default_symfony' => 
  array (
    0 => '/symfony/:action/*',
    1 => '#^/symfony(?:\\/([^\\/]+))?(?:\\/(.*))?$#',
    2 => 
    array (
      0 => 'action',
    ),
    3 => 
    array (
      'action' => 1,
    ),
    4 => 
    array (
      'module' => 'default',
    ),
    5 => 
    array (
    ),
    6 => '',
  ),
  'default_index' => 
  array (
    0 => '/:module',
    1 => '#^(?:\\/([^\\/]+))?$#',
    2 => 
    array (
      0 => 'module',
    ),
    3 => 
    array (
      'module' => 1,
    ),
    4 => 
    array (
      'action' => 'index',
    ),
    5 => 
    array (
    ),
    6 => '',
  ),
  'default' => 
  array (
    0 => '/:module/:action/*',
    1 => '#^(?:\\/([^\\/]+))?(?:\\/([^\\/]+))?(?:\\/(.*))?$#',
    2 => 
    array (
      0 => 'module',
      1 => 'action',
    ),
    3 => 
    array (
      'module' => 1,
      'action' => 1,
    ),
    4 => 
    array (
    ),
    5 => 
    array (
    ),
    6 => '',
  ),
)
);
