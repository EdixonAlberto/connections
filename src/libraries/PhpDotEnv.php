<?php

use Dotenv\Dotenv;

if (empty($_ENV)) {
  $dotenv = Dotenv::createImmutable(__DIR__  . '../../../');
  $dotenv->load();
}
