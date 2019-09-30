<?php

$intro =  json("intro");

?>

<div id="intro">
	<div class="container">
		<div class="intro_content">
			<div>
				<h2><?= $intro->title ?></h2>
			</div>
			<div>
				<p class="pt-md-5 pt-2 pb-md-5 pb-2 col-12 text-center">
					<?= $intro->text ?>
				</p>
			</div>
			
		</div>
	</div>
</div>