<?=view("dashboard/partials/_form-error");?>
<form action="/category/update/<?=$category->id?>" method="post" enctype="multipart/form-data">
<?=view("dashboard/category/_form", ['textButton' => lang('Form.category_update'), 'created' => false]);?>
</form>