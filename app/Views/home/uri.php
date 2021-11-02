<table class="table">
	<thead>
		<tr>
			<th>Scheme</th>
			<th>Auth</th>
			<th>Host</th>
			<th>Port</th>
			<th>Path</th>
			<th>Query</th>
			<th>Fragment</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?=$uri->getScheme()?></td>
			<td><?=$uri->getAuthority()?></td>
			<td><?=$uri->getHost()?></td>
			<td><?=$uri->getPort()?></td>
			<td><?=$uri->getPath()?></td>
			<td><?=$uri->getQuery(['only' => 'user'])?></td>
			<td><?=$uri->getFragment()?></td>
		</tr>
	</tbody>

</table>