<?php

$aliases["${env.name}"] = array (
  'root' => '${project.root}/${drupal.dir.root}/',
  'uri' => 'http://${project.url}',
  '#name' => '${env.name}',
  'path-aliases' => array(
    '%dump-dir' => '${project.root}/${drupal.dir.private}/drush_dump',
    '%files' => '${drupal.dir.files}',
    '%private-files' => '${project.root}/${drupal.dir.private}/uploads'
  )
);

$aliases["dev"] = array (
  'root' => '${project.root.dev}/${drupal.dir.root}/',
  'uri' => 'http://${project.url.dev}',
  '#name' => 'dev',
  // FQDN or IP of server hosting site (think ssh user@remote-host) 
  'remote-host' => '${project.host.dev}',
  // A user on the remote host for which you have an ssh key set up 
  'remote-user' => '${os.user.dev}',
  'path-aliases' => array(
    '%dump-dir' => '${project.root.dev}/${drupal.dir.private}/drush_dump',
    '%files' => '${drupal.dir.files}',
    '%private-files' => '${project.root.dev}/${drupal.dir.private}/uploads',
  )
);

$aliases["staging"] = array (
  'root' => '${project.root.staging}/${drupal.dir.root}/',
  'uri' => 'http://${project.url.staging}',
  '#name' => 'staging',
  // FQDN or IP of server hosting site (think ssh user@remote-host) 
  'remote-host' => '${project.host.staging}',
  // A user on the remote host for which you have an ssh key set up 
  'remote-user' => '${os.user.staging}',
  'path-aliases' => array(
    '%dump-dir' => '${project.root.staging}/${drupal.dir.private}/drush_dump',
    '%files' => '${drupal.dir.files}',
    '%private-files' => '${project.root.staging}/${drupal.dir.private}/uploads',
  )
);