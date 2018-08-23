<?php
if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}

// Local environment.
$aliases['citi.local'] = array(
  'root' => '/var/www/citi/docroot',
  'uri' => 'http://local.citi.com',
  );
// Add remote connection options when alias is used outside VM.
if ('vagrant' != $_SERVER['USER']) {
  $aliases['dsu.local'] += array(
    'remote-host' => 'local.citi.com',
    'remote-user' => 'vagrant',
    'ssh-options' => '-o PasswordAuthentication=no -i ' . drush_server_home() . '/.vagrant.d/insecure_private_key'
  );
}
