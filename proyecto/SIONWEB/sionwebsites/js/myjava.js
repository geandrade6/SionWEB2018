$(document).ready(pagination(1)); // inicio documentacion de paginacions



/*____________________funciones de busqueda_________________________________*/


$(function(){ // inicio funcion 
	$('#bd-desde').on('change', function(){ // cuando seleccionemos la fecha inicial
		var desde = $('#bd-desde').val(); // variable fecha inicial
		var hasta = $('#bd-hasta').val(); // variable fecha finañ
		var url = '../PHP/busca_producto_fecha.php'; // busca el documento donde esta la consulta
		$.ajax({ // inicia de ajax
		type:'POST', // metodo POST
		url:url, // variable inicial url
		data:'desde='+desde+'&hasta='+hasta, //  dEstraccion de datos
		success: function(datos){ // se envia la funcion a # agrear-registros
			$('#agrega-registros').html(datos); // envio de datos a un div
			
		}
	
	});
	return false; // no retorna nada si se accion la funcion
	});
	
	$('#bd-hasta').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../PHP/busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
//____________________fin chesa ingresos______________	
	
	
	$('#bs-prod').on('keyup',function(){
		var dato = $('#bs-prod').val();
		var url = '../PHP/busca_producto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});

	$('#nuevo-producto').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro').val('Registro');
		$('#edi').hide();
		$('#reg').show();
		$('#registra-producto').modal({
			show:true,
			backdrop:'static'
		});
	});
	
});

/*____________________fin funciones de busqueda_________________________________*/


/*____________________Funcion de insercion_________________________________*/

function agregaRegistro(){
	var url = '../php/agrega_producto.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro').val() == 'Registro'){
			$('#formulario')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros').html(registro);
			return false;
			}
		}
	});
	return false;
}

/*____________________Funcion de eliminacion _________________________________*/
function eliminarProducto(id){
	var url = '../php/elimina_producto.php';
	var pregunta = confirm('¿Esta seguro de eliminar este Producto?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			$('#agrega-registros').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}

/*____________________Funcion de Edicion _________________________________*/

function editarProducto(id){
	$('#formulario')[0].reset();
	var url = '../php/edita_producto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#reg').hide();
				$('#edi').show();
				$('#pro').val('Edicion');
				$('#id-prod').val(id);
				$('#nombre').val(datos[0]);
				$('#tipo').val(datos[1]);
				$('#precio-uni').val(datos[2]);
				$('#precio-dis').val(datos[3]);
				$('#registra-producto').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}

/*____________________Funcion de reporte por pdf extraccion _________________________________*/

function reportePDF(){
	var desde = $('#bd-desde').val();
	var hasta = $('#bd-hasta').val();
	window.open('../php/productos.php?desde='+desde+'&hasta='+hasta);
}

/*____________________Funcion de paginacion _________________________________*/

function pagination(partida){
	var url = '../php/paginarProductos.php';
	$.ajax({
		type:'POST',
		url:url,
		data:'partida='+partida,
		success:function(data){
			var array = eval(data);
			$('#agrega-registros').html(array[0]);
			$('#pagination').html(array[1]);
		}
	});
	return false;
}