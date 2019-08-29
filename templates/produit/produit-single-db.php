<div class="produit">
    <p><?php echo $produit['nom'] ?></p>
    <p><?php echo $produit['reference']; ?></p>
    <p><img src="<?php echo $produit['image']; ?>" /></p>
    <p><?php echo $produit['description']; ?></p>
    <p> <?php if ($produit["promotion"]) { ?>
            <span class="promo">promo</span>
        <?php } ?>
        <?php echo $produit['nom']; ?>
</p>
<p><?php echo $produit['prix_unitaire_ht']; ?>€</p>
</div>
