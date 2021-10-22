
<div class="row">
	<?php foreach ($images as $i): ?>
		<div class="col-12 col-md-6 col-xl-4 mt-3 position-relative">
			<a href="<?=route_to('image_delete', $i->id)?>" class="btn btn-danger crud-images">
				<span aria-hidden="true">&times;</span>
			</a>
			<img class="img-fluid" src="<?=route_to('get_image', $i->movie_id, $i->image)?>" alt="">
		</div>
	<?php endforeach?>
</div>