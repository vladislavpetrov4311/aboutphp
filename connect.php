<?php

class connectPDO
{
    private string $host = 'my_db';
    private string $username = 'postgres';
    private string $password = 'example';
    private string $database = 'testDB';

    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("pgsql:host=$this->host;dbname=$this->database;", $this->username, $this->password);
    }

    public function get_obj(): PDO
    {
        return $this->pdo;
    }
}

?>