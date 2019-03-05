<table>
<tr>
<th style="background-color: #555; color: #fff;">Placa</th>
<th style="background-color: #555; color: #fff;">Marca</th>
<th style="background-color: #555; color: #fff;">Modelo</th>
</tr>
<?php foreach($model as $data): ?>
<tr>
<td><?php echo $data->placa ?></td>
<td><?php echo $data->marca ?></td>
<td><?php echo $data->modelo ?></td>
</tr>
<?php endforeach; ?>
</table>