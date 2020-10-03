<?php

class DB
{
  private $engine;
  private $name;
  private $host;
  private $user;
  private $password;

  public function __construct($engine)
  {
    $url = parse_url($_ENV['DATABASE_URL']);

    $this->engine = $engine;
    $this->name = trim($url['path'], '/');
    $this->host = $url['host'];
    $this->user = $url['user'];
    $this->password = $url['pass'];
  }

  public function connect()
  {
    try {
      $connection = "{$this->engine}:dbname={$this->name};host={$this->host}";
      return new \PDO($connection, $this->user, $this->password);
    } catch (\PDOException $error) {
      $err = utf8_decode(($error->getMessage()));
      throw new Exception("ERROR_CONNECT -> {$err}", 500);
    }
  }
}
