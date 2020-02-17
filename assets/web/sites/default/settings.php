<?php

// @codingStandardsIgnoreFile

$databases = [];

if ($_SERVER['SYMFONY_DOCKER_ENV']) {
  $databases['default']['default'] = [
    'driver' => $_SERVER['DATABASE_DRIVER'],
    'host' => $_SERVER['DATABASE_HOST'],
    'database' => $_SERVER['DATABASE_NAME'],
    'username' => $_SERVER['DATABASE_USER'],
    'password' => $_SERVER['DATABASE_PASSWORD'],
    'port' => $_SERVER['DATABASE_PORT'],
    'prefix' => '',
    'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
    'collation' => 'utf8mb4_general_ci',
  ];
}

$settings['hash_salt'] = '53cr3t!';

$settings['update_free_access'] = FALSE;

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
