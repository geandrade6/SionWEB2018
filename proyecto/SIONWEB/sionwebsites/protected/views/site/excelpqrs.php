<table>
<tr>
<th style="background-color: #555; color: #fff;">PQRS</th>
<th style="background-color: #555; color: #fff;">Asunto</th>
<th style="background-color: #555; color: #fff;">Mensaje</th>
<th style="background-color: #555; color: #fff;">Correo</th>
<th style="background-color: #555; color: #fff;">Ubicacion Archivo</th>
<th style="background-color: #555; color: #fff;">Estado</th>
<th style="background-color: #555; color: #fff;">Cedula Usuario</th>
<th style="background-color: #555; color: #fff;">Fecha Solicitud</th>
</tr>
<?php foreach($model as $data): ?>
<tr>
<td><?php echo $data->idpqrs ?></td>
<td><?php echo $data->asunto ?></td>
<td><?php echo $data->mensaje ?></td>
<td><?php echo $data->correo ?></td>
<td><?php echo $data->adjunto ?></td>
<td><?php echo $data->idestadopqrs?></td>
<td><?php echo $data->idusuario?></td>
<td><?php echo $data->fecha_crea?></td>


</tr>
<?php endforeach; ?>
</table>