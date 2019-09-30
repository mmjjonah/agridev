<div id="f_addProduct">
	
	<?= content("add_btn", true) ?>
	<form method="POST" action="<?= page() ?>" class="row pl-4 pr-4" enctype="multipart/form-data">
		<button class="btn bg-transparent text-center col-12 mb-3">
			<span class="fa fa-save"></span>
		</button>
		<div class="input-group col-12 p-0 mb-2">
			<input class="form-control" type="text" placeholder="anarany" name="nom" required>
			<div class="input-group-append">
				<button id="btnSelectImg" class="btn mt-0 pt-0" type="button">
					<span class="fa fa-photo-video mt-2"></span>
				</button>
				<input class="d-none" type="file" name="image"> 
			</div>
		</div>

		<?php if (!type("recolteur")): ?>
			<input class="form-control col-12" type="text" placeholder="vidiny" name="prix" required>
		<?php endif ?>

		<input class="form-control col-6" type="text" placeholder="ahabetsany, isany" name="quantite" required>
		<input class="form-control col-6" type="text" placeholder="anisana azy" name="unite" required>
		<textarea class="form-control" placeholder="fanampim-panazavana" name="infoPlus" required></textarea>
	</form>
</div>