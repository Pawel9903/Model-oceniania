<?php

class Config
{
    public function __construct(){}

    private static $instance;
    private $host = 'localhost';
    private $dbName = 'opiniondb';
    private $userName = 'root';
    private $charset = 'Utf8';
    private $password = '';

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        return self::$instance = new Config();
    }

    /**
     * @return $this
     */
    public function getConfig()
    {
        return $this;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getDbName(): string
    {
        return $this->dbName;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getCharset(): string
    {
        return $this->charset;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}