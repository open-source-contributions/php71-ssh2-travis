<?php

$connection = ssh2_connect('localhost', 22, ['hostkey'=>'ssh-rsa']);

if (ssh2_auth_pubkey_file($connection, 'root',
    '/home/travis/.ssh/id_rsa.pub',
    '/home/travis/.ssh/id_rsa')) {
  echo "Public Key Authentication Successful\n";
} else {
  die('Public Key Authentication Failed');
}
