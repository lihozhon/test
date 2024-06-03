<table>
	<tr>
		<th>Galery</th>
		<th>Index</th>
	</tr>
	<?php foreach ($galleries as $gallery): ?> 
		<tr>
			<td><?= $gallery['id']?></td>
			<td><?= $gallery['name']?></td>
		</tr>
	<?php endforeach?>
</table>