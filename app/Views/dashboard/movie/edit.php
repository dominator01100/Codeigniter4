<?=view("dashboard/partials/_form-error");?>
<form action="/movie/update/<?=$movie->id?>" method="post" enctype="multipart/form-data">
    <!-- <input type="hidden" name="_method" value="PUT"> -->
    <?=view("dashboard/movie/_form", ['textButton' => 'Actualizar', 'created' => false]);?>
</form>

<?=view("dashboard/movie/_images");?>