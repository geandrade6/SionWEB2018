<table>
<tr>
<th style="background-color: #555; color: #fff;">Cedula</th>
<th style="background-color: #555; color: #fff;">Nombre</th>
<th style="background-color: #555; color: #fff;">Apellido</th>
<th style="background-color: #555; color: #fff;">Telefono</th>
<th style="background-color: #555; color: #fff;">Celular</th>
<th style="background-color: #555; color: #fff;">Correo</th>
<th style="background-color: #555; color: #fff;">Rol</th>
<th style="background-color: #555; color: #fff;">Estado</th>
<th style="background-color: #555; color: #fff;">Observaciones</th>
</tr>
<?php foreach($model as $datos): ?>
<tr>
<td><?php echo $datos->cedula ?></td>
<td><?php echo $datos->nombre ?></td>
<td><?php echo $datos->apellido ?></td>
<td><?php echo $datos->telefono ?></td>
<td><?php echo $datos->celular ?></td>
<td><?php echo $datos->correo?></td>
<td><?php echo $datos->username?></td>
<td><?php echo $datos->estado_usuario?></td>
<td><?php echo $datos->observaciones?></td>

</tr>
<?php endforeach; ?>
</table>