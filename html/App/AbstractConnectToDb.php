<?php

class AbstractConnectToDb
{
    private PDO $pdo;

    public function connection(string $dbName = 'app1'): void
    {
        try {
            $this->pdo = new PDO("mysql:host=mysql-server;dbname=$dbName", 'root', 'root');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        return $this->pdo;
    }
}