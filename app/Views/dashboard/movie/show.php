<div class="card">
	<div id="carouselMovieImages" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-indicators">
				<?php foreach ($images as $index => $i): ?>
					<button type="button" data-bs-target="#carouselMovieImages" data-bs-slide-to="<?=$index?>" <?=$index == 0 ? 'class="active"' : ''?> aria-current="true" aria-label="Slide 1">
					</button>
				<?php endforeach?>
			</div>
			<?php foreach ($images as $index => $i): ?>
				<div class="carousel-item <?=$index == 0 ? "active" : ""?>">
					<img src="<?=route_to('get_image', $i->movie_id, $i->image)?>" class="d-block w-100" alt="">
				</div>
			<?php endforeach?>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselMovieImages" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselMovieImages" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<div class="card-body">
			<p class="card-text">
				<?=$movie->description?>
			</p>
		</div>
	</div>