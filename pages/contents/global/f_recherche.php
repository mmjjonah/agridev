<?php if (!isset($GLOBALS['noSearch'])): ?>
	<section class="recherche_section pb-4 pt-md-3 pt-0">
		<div class="row mr-0 pl-5">
			<div class="col-md-8 col-12 mt-5">
				<h2 class="h2 text-white col-12 text-capitalize"><?= $global ?></h2>
				<form method="GET" id="f_recherche">
					<div class="col-lg-10 col-md-12">
						<div class="input-group mb-3">
							<input name="recherche" id="inp_search" type="search" class="form-control rounded-0 font-weight-bold" placeholder="Vokatra, fitaovana, tolotra, ...">
							<div class="input-group-append">
								<button class="btn" type="submit">
									<span class=" rounded-0"><i class="fa fa-search"></i></span>
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-12 text-center d-lg-inline d-md-inline d-none">
				<?php

					include "assets/img/mada.svg";

				?>
			</div>
		</div>
	</section>
	<?php endif ?>