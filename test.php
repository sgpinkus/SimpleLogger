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
  Logger::getLogger()->warning('warning');
  $l = new Logger('debug', true);
  $l->debug('debug');
  $l->error('error');
}

main();
