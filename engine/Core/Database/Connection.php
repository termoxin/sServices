<?php

namespace Engine\Core\Database;

use \PDO;

class Connection
{
    private $config = [
        'host'     => 'project',
        'dbname'   => 'project',
        'username' => 'root',
        'password' => '',
        'charset'  => 'utf8'
    ];
    /**
     * @var PDO
     */
    private $link;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->connect();
    }
    /**
     * @return $this
     */
    private function connect()
    {
        $dsn = 'mysql:host=' .$this->config['host'] .';dbname=' .$this->config['dbname'] .';charset=' .$this->config['charset'];
        $this->link = new PDO($dsn, $this->config['username'], $this->config['password']);
        return $this;
    }
    /**
     * @param $sql
     * @param array $values
     * @return mixed
     */
    public function execute($sql, $values = [])
    {
        $sth = $this->link->prepare($sql);
        return $sth->execute($values);
    }
    /**
     * @param $sql
     * @param array $values
     * @param int $statement
     * @return array
     */
    public function query($sql, $values = [], $statement = PDO::FETCH_ASSOC)
    {
        $sth = $this->link->prepare($sql);
        $sth->execute($values);
        $result = $sth->fetchAll($statement);
        if ($result === false) {
            return [];
        }
        return $result;
    }
    /**
     * @return int
     */
    public function lastInsertId()
    {
        return $this->link->lastInsertId();
    }
}