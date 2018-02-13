<?php
$password = password_hash('testing', PASSWORD_DEFAULT);
echo $password . PHP_EOL;
$matches = password_verify('foo', $password);
echo $matches . PHP_EOL;
$matches = password_verify('testing', $password);
echo $matches . PHP_EOL;
