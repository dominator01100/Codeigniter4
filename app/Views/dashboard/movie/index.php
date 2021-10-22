<a href="/movie/new" class="btn btn-success mb-4"><i class="fa fa-plus"></i> Crear</a>

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Categoría</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($movies as $m): ?>
			<tr>
				<td><?=$m->id?></td>
				<td><?=$m->title?></td>
				<td><?=$m->category?></td>
				<td class="d-flex">
					<a class="ms-2 btn btn-primary btn-sm" href="/movie/<?=$m->id?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver detalle"><i class="fa fa-eye"></i></a>
					<form action="/movie/delete/<?=$m->id?>" method="post" class="">
						<button class="btn btn-danger btn-sm ms-2" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Borrar">
							<i class="fa fa-trash"></i>
						</button>
					</form>
					<a class="ms-2 btn btn-primary btn-sm" href="/movie/<?=$m->id?>/edit"><i class="fa fa-pencil-alt" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"></i></a>
				</td>
			</tr>
		<?php endforeach?>

	</tbody>
</table>

<?=$pager->links()?>