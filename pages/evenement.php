<?php

$evenements =  json("evenements");
$title = ($_GET['type'] == "formation" ?"Fihofanana":"foara");

$GLOBALS['title_page'] = $title;

?>

<section class="pt-5 pb-5">
	<div class="container">
		<div id="allEvent" class="row pl-5 pr-5">
			<?php foreach ($evenements as $key => $evenement): ?>
				<?php if ( ($title == "foara" && $evenement->type =="type1") || ($title == "Fihofanana" && $evenement->type =="type2") ): ?>
				<div class="col-md-4 event_col pr-0 pl-0 mb-4">

					<article class="f_event">
						<div class="event_header">
							<h2 class="event_title">
								<?= $evenement->title ?>
							</h2>
						</div>

						<div class="readmore">
							<a href="#">Liana</a>
						</div>

						<div class="event_body p-2">
							<?= $evenement->description ?>
							<br>
							<div class="text-center pointer">
								<a href="#" class="close_detail">
									<span class=" fa fa-arrow-left"></span>
								</a>
							</div>
						</div>
					</article>
				</div>
			<?php endif ?>
		<?php endforeach ?>
	</div>
</div>
</section>
