<?php

  class DB
  {
    private static $pdo;

    public function __construct($host, $dbname, $username, $password)
    {
      $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$username,$password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$pdo = $pdo;
    }

    public static function query($query, $params = array())
    {
      $statement = self::$pdo->prepare($query);
      $statement->execute($params);

      if(explode(' ',$query)[0]== 'SELECT')
      {
        $data = $statement->fetchAll();
        return $data;
      }
    }

  }
