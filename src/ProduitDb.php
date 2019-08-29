<?php
require_once dirname(__FILE__) . "/Db.php";

class ProduitDb extends Db
{
    public function getAll(): array
    {
        $stmt = $this->connection->prepare('SELECT * FROM produit');
        $stmt->execute();

        return $stmt->fetchAll();
    }
}