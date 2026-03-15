<?php

namespace LAM;

use PDO;

class database
{
    public function query(string $query, array $bindings = []): array
    {
        $connection = $this->connect();
        $statement = $connection->prepare($query);
        foreach ($bindings as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        $status = $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }
 
    public function execute(string $query, array $bindings = []): bool
    {
        $connection = $this->connect();
        $statement = $connection->prepare($query);
        foreach ($bindings as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        return $statement->execute();
    }

    public function connect()
    {
        return new PDO($this->getDsn(), $this->getConfig()['username'], $this->getConfig()['password']);
    }

    public function lastInsertId()
    {
        return $this->connect()->lastInsertId();
    }

    public function getConfig()
    {
        //local
        return [
            'username' => 'root',
            'password' => '',
            'host' => 'localhost',
            'database' => 'london_aircraft_museum',
            'port' => '3306'
        ];
    }

    public function getDsn()
    {
        $config = $this->getConfig();
        $host = $config['host'];
        $database = $config['database'];
        $port = $config['port'];

        return 'mysql:host=' 
            . $host 
            . ';dbname=' 
            . $database 
            . ';port=' 
            . $port 
            . ';';
    }
}