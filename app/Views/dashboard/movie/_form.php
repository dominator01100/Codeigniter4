<div class="mb-3">
	<label class="form-label" for="title">Title</label>
	<input class="form-control" type="input" name="title" id="title" value="<?=old('title', $movie->title)?>" />
</div>

<div class="mb-3">
	<label for="description">Description</label>
	<textarea class="form-control" name="description" id="description"><?=old('description', $movie->description)?></textarea>
</div>

<?php if (!$created): ?>
	<div class="mb-3">
		<label for="image">Image</label>
		<input class="form-control" type="file" name="image" id="image">
	</div>
<?php endif?>

<div class="mb-3">
	<label for="category_id">Category</label>
	<select class="form-select" name="category_id" id="category_id">
		<?php foreach ($categories as $c): ?>
			<option <?=$movie->category_id !== $c->id ?: "selected"?> value="<?=$c->id?>"><?=$c->title?></option>
		<?php endforeach?>
	</select>
</div>

<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> <?=$textButton;?></button>