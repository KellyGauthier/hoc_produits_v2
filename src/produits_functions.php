<?php
/**
 * Looks for a product with the specified id
 * in the specified array
 *
 * @param integer $id The wanted ID
 * @param array $produits The products (multi-dimensional, each product is considered as an associative array with an 'id' key)
 * @return array|null The product (array), null otherwise
 */
function search_produit(int $id, array $produits): ?array
{
    // Extraction des valeurs d'IDs depuis le tableau $produits
    // Cette fonction va nous produire un tableau unidimensionnel
    // Contenant uniquement les ID des produits
    // Avec les mêmes positions d'index
    $id_values = array_column($produits, 'id');
    // On peut donc chercher l'index correspondant à l'ID récupéré depuis l'URL
    // On recherche cette valeur dans le tableau d'ID qu'on a extrait juste avant avec array_column
    $key = array_search($id, $id_values);
    if ($key === false) {
        return null;
    }
    // On va donc récupérer le produit correspondant à l'index
    return $produits[$key];
}
