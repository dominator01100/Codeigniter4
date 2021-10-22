<?php if (session('message')): ?>
	<div class="alert alert-success alert-dismissible fade show my-2">
		<?=session('message');?>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif?>
