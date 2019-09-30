<?php

$produits =  [];

if (isset($_GET['type'])) {
	$page=$_GET['type'];

	switch ($page){
		case 'agriculteur':
		{ 
			$produits =  array_merge($produits, json("produits_fournisseur"));
			$produits =  array_merge($produits, json("produits_recolteur"));
			$produits =  array_merge($produits, json("produits_agriculteur"));
			$GLOBALS['title_page'] ="Akora, fitaovana";
		}
		break;
		
		case 'recolteur':
		{
			$produits =  array_merge($produits, json("produits_recolteur"));
			$produits =  array_merge($produits, json("produits_agriculteur"));
			$GLOBALS['title_page'] ="Vokatra"; 
			break;
		}

		case 'fournisseur':
		{
			$produits =  array_merge($produits, json("produits_agriculteur"));
			$GLOBALS['title_page'] ="Tinady";
			break;
		}
		default:
		
		break;
	}
}

?>

<section class="pt-5 pb-5">
	<div class="container">
		<div id="allProducts" class="row">
			<div class="col-md-4">
				<?= content("add_product") ?>
			</div>
			<?php foreach ($produits as $key => $produit): ?>
				<div class="col-md-4">
					<div class="produit">

						<h2 class="text-success"><?= ucfirst($produit->nom) ?></h2>

						<?php if (isset($produit->prix)): ?>

							<span class="prix_produit"><i class="fa fa-money"></i> <strong><?= $produit->prix ?> Ariary</strong> / <?= $produit->unite ?></span>

						<?php endif ?>

						<p class="quantite_produit">Tahiry: <?= $produit->quantite ?> <span class="unite_produit"><?= $produit->unite ?></span></p>

						<div class="f_infoPlus">
							<p class="infoPlus p-3"><?= $produit->infoPlus ?></p>
						</div>

					</div>
				</div>

			<?php endforeach ?>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
