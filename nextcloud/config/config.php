<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'password' => '',
    'port' => 6379,
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ocq1543dg6nl',
  'passwordsalt' => 'o4NXzqWMOCapqbqtYiZPqY0TZO9w9Y',
  'secret' => '3DbW5MitlFLXCLYqlHq7syE3xBpnT2ebCfNleP+8ILqI5RWw',
  'trusted_domains' => 
  array (
    0 => '10.69.21.247:8081',
    1 => '192.168.112.5:8081',
    2 => '10.69.21.247:443',
    3 => '10.69.21.247'
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '28.0.5.1',
  'overwrite.cli.url' => 'http://10.69.21.247:8081',
  'overwriteprotocol' => 'https',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextclouddb',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'dbpassword',
  'installed' => true,
  'default_phone_region' => 'BR'
);
