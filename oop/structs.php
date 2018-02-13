<?php
class Database {
  public function __construct($input) {
    echo "{$input}" . PHP_EOL;
  }

  public function __destruct() {
    echo "destruct". PHP_EOL;
  }
}

$obj = new Database('construct');

// unset($obj);
// echo 'after unset' . PHP_EOL;
