<?php
$password = password_hash('testing', PASSWORD_DEFAULT);
echo $password . PHP_EOL;
if (password_needs_rehash($password, PASSWORD_DEFAULT, ['cost' => 12])) {
  $newHash = password_hash('testing', PASSWORD_DEFAULT, ['cost' => 12]);
  echo $newHash . PHP_EOL;
}
