<?php
class InvalidCCNumberException extends InvalidArgumentException {
  public function __construct($message = "No CC Number", $code = 0, $previous = null) {
    return parent::__construct($message, $code, $previous);
  }
}
try {
  processCC(1);
} catch (InvalidCCNumberException $e) {
  echo get_class($e) . PHP_EOL;
  echo $e->getMessage() . PHP_EOL;
} finally {
  echo PHP_EOL . 'Final';
}

function processCC($num = null, $zipCode = null) {
  try {
    validate($num, $zipCode);
  } catch (Exception $e) {
    throw $e;
  }
  echo 'processed';
}

function validate($num, $zipCode) {
  if (is_null($num)) {
    throw new InvalidCCNumberException;
  }
}
