<?php
$databases['default']['default'] = array (
  'database' => 'default',
  'username' => 'user',
  'password' => 'user',
  'host' => 'db',
  'driver' => 'mysql',
);

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/default/services.local.yml';

define('ENVIRONMENT', 'dev');