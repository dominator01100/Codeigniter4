<?=view("dashboard/partials/_form-error");?>
<form action="/category/update/<?=$category->id?>" method="post" enctype="multipart/form-data">
<?=view("dashboard/category/_form", ['textButton' => 'Actualizar', 'created' => false]);?>
</form>