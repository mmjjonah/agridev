<?php

$articles =  json("articles");

?>


			<?php foreach ($articles as $key => $article): ?>
				<section>
					<div class="container">
						<div class="row">
								<div class="col-md-6">
									
											<h2><?= $article->title ?></h2>
													
										
									

									
									<?= $article->content ?>
												<a class="btn btn-primary" href="#">Lire la suite</a>
									
								</div>
								<div class="col-md-6">
									
								</div>
						</div>
					</div>
				</section>
			<?php endforeach ?>


