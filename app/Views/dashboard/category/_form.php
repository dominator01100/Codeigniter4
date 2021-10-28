<div class="mb-3">
    <label class="form-label" for="title"><?=lang('Form.title')?></label>
    <input class="form-control" type="input" id="title" name="title" value="<?=old('title', $category->title)?>"/>
</div>

<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> <?=$textButton?></button>