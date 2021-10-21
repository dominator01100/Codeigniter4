<label for="title">Title</label>
<input type="input" name="title" id="title" value="<?=old('title', $movie->title)?>" /><br />

<label for="description">Text</label>
<textarea name="description" id="description"><?=old('description', $movie->description)?></textarea><br />

<?php if (!$created): ?>
	<label for="image">Image</label>
	<input type="file" name="image" id="image">
<?php endif?>

<label for="category_id">Category</label>
<select name="category_id" id="category_id">
	<?php foreach ($categories as $c): ?>
		<option <?=$movie->category_id !== $c->id ?: "selected"?> value="<?=$c->id?>"><?=$c->title?></option>
	<?php endforeach?>
</select>

<input type="submit" name="submit" value="<?=$textButton;?>" />