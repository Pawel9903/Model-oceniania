<?php

class Db
{
    public function __construct(){}

    private static $instance;

    public static function getInstance()
    {
        return self::$instance = new Db();
    }

    public function getDb()
    {
        $DbParameters = Config::getInstance()->getConfig();

        $pdo = new PDO('mysql:
            host='.$DbParameters->getHost().';
            dbname='.$DbParameters->getDbName().';
            charset=' .$DbParameters ->getCharset() .'',
            $DbParameters->getUserName(),
            $DbParameters->getPassword()
    );
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
    }
}