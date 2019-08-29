<?php
require_once dirname(__FILE__) . "/IProduitProvider.php";

class ProduitService
{
    private $provider;

    public function __construct(IProduitProvider $provider)
    {
        $this->provider = $provider;
    }

    public function getAllProduits(): array
    {
        return $this->provider->getAll();
    }
}