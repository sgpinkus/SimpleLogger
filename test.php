<?php
require_once './vendor/autoload.php';
use SimpleLogger\Logger;

function main() {
  $l = new Logger();
  $l->debug('debug');
  $l->error('error');
  $l = new Logger('debug');
  $l->debug('debug');
  $l->error('error');
}

main();
