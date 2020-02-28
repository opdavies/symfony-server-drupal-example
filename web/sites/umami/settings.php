<?php

$databases['default']['default'] = [
  'driver' => $_SERVER['DATABASE_UMAMI_DRIVER'],
  'host' => $_SERVER['DATABASE_UMAMI_HOST'],
  'database' => $_SERVER['DATABASE_UMAMI_NAME'],
  'username' => $_SERVER['DATABASE_UMAMI_USER'],
  'password' => $_SERVER['DATABASE_UMAMI_PASSWORD'],
  'port' => $_SERVER['DATABASE_UMAMI_PORT'],
  'prefix' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'collation' => 'utf8mb4_general_ci',
];

$settings["config_sync_directory"] = '../config/umami';
