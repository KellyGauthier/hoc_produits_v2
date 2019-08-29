<?php
require_once dirname(__FILE__) . "/IProduitProvider.php";

class ProduitFile implements IProduitProvider
{
    public function getAll(): array
    {
        return [
            [
                "id" => 1,
                "reference" => "cjia4561",
                "image" => "https://source.unsplash.com/300x180",
                "description" => "Lorem ipsum dolor sit amet",
                "prix_unitaire_ht" => 46.15,
                "promotion" => true,
                "nom" => "Lorem"
            ],
            [
                "id" => 2,
                "reference" => "bgdzc56",
                "image" => "https://source.unsplash.com/300x180",
                "description" => "Vestibulum diam massa, pretium sed dapibus",
                "prix_unitaire_ht" => 37.55,
                "promotion" => false,
                "nom" => "Vestibulum"
            ],
            [
                "id" => 3,
                "reference" => "tiocnujsi78",
                "image" => "https://source.unsplash.com/300x180",
                "description" => "Morbi tortor nisi, fermentum non nisi quis",
                "prix_unitaire_ht" => 40.85,
                "promotion" => true,
                "nom" => "Tortor"
            ]
        ];
    }
}