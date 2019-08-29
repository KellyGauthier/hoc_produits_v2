<?php
require_once dirname(__FILE__) . "/Db.php";
require_once dirname(__FILE__) . "/IProduitProvider.php";

class ProduitDb extends Db implements IProduitProvider
{
    public function getAll(): array
    {
        $stmt = $this->connection->prepare('SELECT * FROM produit');
        $stmt->execute();

        return $stmt->fetchAll();
    }
}