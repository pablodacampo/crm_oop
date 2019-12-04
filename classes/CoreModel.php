<?php
abstract class CoreModel {
  private $_engine;
  private $_host;
  private $_dbname;
  private $_charset;
  private $_user;
  private $_pwd;

  private $_db;

  public function __construct(string $engine, string $host, string $dbname, string $charset, string $user, string $pwd) {
    $this->_engine = $engine;
    $this->_host = $host;
    $this->_dbname = $dbname;
    $this->_charset = $charset;
    $this->_user = $user;
    $this->_pwd = $pwd;
    
    $this->connect();
  }

  protected function getDb() {
    return $this->_db;
  }

  private function connect() {
    try {
      $dsn = $this->_engine . ':host=' . $this->_host . ';dbname=' . $this->_dbname . ';charset=' . $this->_charset;
      $this->_db = new PDO($dsn, $this->_user, $this->_pwd, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }
}