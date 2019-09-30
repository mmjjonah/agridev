<?php

$types =  json("bloc_type");

?>

<?php foreach ($types as $i => $type): ?>

	<section class="bg-demi-image-<?= (($i%2==0)?"right":"left") . " " . $type->bg ?>">
		<div class="container">
			<div class="row">
				<div class="<?= (($i%2==0)?"col":"offset") ?>-lg-6">
					<div class="page-content">
						<h2 class="h2"><?= ucfirst($type->title) ?></h2>
						<div class="content_bloc">
							<?= $type->content ?>
							<div class="mt-3">
								<a href="<?= $type->link ?>" class="btn btn-primary col-md-10"><?= $type->btnText ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endforeach ?>


