<table class="table">
	<thead>
		<tr>
			<th>Navegador</th>
			<th>Versión</th>
			<th>Móvil</th>
			<th>Robot</th>
			<th>Plataforma</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?=$agent->getBrowser()?></td>
			<td><?=$agent->getVersion()?></td>
			<td><?=$agent->getMobile()?></td>
			<td><?=$agent->getRobot()?></td>
			<td><?=$agent->getPlatform()?></td>
		</tr>
	</tbody>

</table>