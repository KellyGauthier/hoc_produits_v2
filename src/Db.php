<?php
class Db
{
    protected $connection; //Détient l'instance PDO connectée à la BDD
    private const HOST = '127.0.0.1';
    private const DB   = 'produits_hoc_php_2019';
    private const USER = 'hoc_php_2019';
    private const PASS = 'phpUser';
    private const CHARSET = 'utf8mb4';

    private const DSN = "mysql:host=" . self::HOST .
                        ";dbname=" . self::DB .
                        ";charset=" . self::CHARSET;


    public function __construct()
    {
        try {
            $this->connection = new PDO(self::DSN, self::USER, self::PASS);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), $e->getCode());
        }
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }
}
