<table>
<tr>
<th style="background-color: #555; color: #fff;">Placa</th>
<th style="background-color: #555; color: #fff;">Marca</th>
<th style="background-color: #555; color: #fff;">Color</th>
<th style="background-color: #555; color: #fff;">Modelo</th>
<th style="background-color: #555; color: #fff;">Usuarios</th>
<th style="background-color: #555; color: #fff;">Fecha</th>
<th style="background-color: #555; color: #fff;">Tipo Vehiculo</th>
</tr>
<?php foreach($model as $data): ?>
<tr>
<td><?php echo $data->placa ?></td>
<td><?php echo $data->marca ?></td>
<td><?php echo $data->color ?></td>
<td><?php echo $data->modelo ?></td>
<td><?php echo $data->usuarios_cedula ?></td>
<td><?php echo $data->fecharegistrovehiculos?></td>
<td><?php echo $data->tipo_de_vehiculo?></td>


</tr>
<?php endforeach; ?>
</table>