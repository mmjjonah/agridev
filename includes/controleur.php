<?php

function d($var){
	?>
	<pre class="offset-2 bg-light col-8 m-3 <?=$class?>"><?php print_r($var) ?></pre>
	<?php
}


function addProduct(){
	if (title() == "acteur" && !empty($_POST) && isset($_POST['infoPlus'])) {
		$produits = json("produits_" . type());
		$d =  json_encode( array_merge( [json_decode(json_encode($_POST))] , $produits));
		fwrite(fopen("pages/contents/" . title() . "/produits_" . type() . ".json", 'w'), $d);
	}
	return 0;
}

addProduct();