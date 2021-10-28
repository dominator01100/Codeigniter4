<table class="table">
	<thead>
		<tr>
			<th>Tablas</th>
			<th>Tabla: Movies</th>
			<th>Tabla: Películas</th>
			<th>Campos: Movie</th>
			<th>Campo: Nombre tabla Movies</th>
			<th>Campo: Title tabla Movies</th>
			<th>Data: Movies</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?=implode(' - ', $db->listTables())?></td>
			<td><?=$db->tableExists('movies')?></td>
			<td><?=(int) $db->tableExists('peliculas')?></td>
			<td><?=implode(' - ', $db->getFieldNames('movies'))?></td>
			<td><?=(int) $db->fieldExists('nombre', 'movies')?></td>
			<td><?=$db->fieldExists('title', 'movies')?></td>
			<td><?=var_dump($db->getFieldData('movies'))?></td>
		</tr>
	</tbody>

</table>