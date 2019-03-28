<?php $contador=count($model); if ($model !== null):?>
<html>
<head>
<style>
 body {font-family: sans-serif;
 font-size: 10pt;
 }
 p { margin: 0pt;
 }
 td { vertical-align: top; }
 .items td {
 border-left: 0.1mm solid #000000;
 border-right: 0.1mm solid #000000;
 }
 table thead td { background-color: #EEEEEE;
 text-align: center;
 border: 0.1mm solid #000000;
 }
 .items td.blanktotal {
 background-color: #FFFFFF;
 border: 0mm none #000000;
 border-top: 0.1mm solid #000000;
 }
 .items td.totals {
 text-align: right;
 border: 0.1mm solid #000000;
 }
</style>
</head>
<body>
 
<!--mpdf
 <htmlpageheader name="myheader">
 <table width="100%"><tr>
 <td width="50%" style="color:grey;"><span style="font-weight: bold; font-size: 14pt;">TIMIZA PARKLOT</span><br />Bogotá - COLOMBIA<br /><span style="font-size: 15pt;">&#9742;</span> 3172646327</td>
 <td width="50%" style="text-align: right;"><b>Reporte General de Usuarios</b></td>
 </tr></table>
 </htmlpageheader>
 
<htmlpagefooter name="myfooter">
 <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
 Página {PAGENO} de {nb}
 </div>
 </htmlpagefooter>
 
<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
 <sethtmlpagefooter name="myfooter" value="on" />
 mpdf-->
<div style="text-align: right"><b>Fecha: </b><?php echo date("d/m/Y"); ?> </div>
<b>Total Resultados:</b> <?php echo $contador; ?>
<!-- Linea superiro de la tabla -->
 <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="5">
 <thead>
 <tr>
 <!-- Menu superior de tabla -->
 <td width="16.666666666667%">Nombre</td>
 <td width="16.666666666667%">Apellido</td>
 <td width="16.666666666667%">Telefono</td>
 <td width="16.666666666667%">Celular</td>
 <td width="16.666666666667%">Correo</td>
 </tr>
 </thead>
 <tbody>
 <!-- Item o Array de datos llamados-->
 <?php foreach($model as $row): ?>
 <tr>
 <td aling ="center">
 <?php echo $row->nombre; ?>
 </td>
 <td aling="center">
 <?php echo $row->apellido; ?>
 </td>
 <td aling="center">
 <?php echo $row->telefono; ?>
 </td>
 <td aling="center">
 <?php echo $row->celular; ?>
 </td>
 <td aling="center">
 <?php echo $row->correo; ?>
 </td>
 
 </tr>
 <?php endforeach; ?>
 <!-- FIN ITEMS -->
 <tr>
 <!-- linea inferios de la tabla-->
 <td class="blanktotal" colspan="5" rowspan="5"></td>
 </tr>
 </tbody>
 </table>
 </body>
 </html>
<?php endif; ?>