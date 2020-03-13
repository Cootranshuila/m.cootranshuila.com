jQuery(document).ready(function () {

	//Peticion par listar las ciudades de Origen
	jQuery.ajax({
		url: 'https://wscootranshuila.teletiquete.com/WebService/pag_web.php?get_ciudad',
		type: 'GET',
		success: function (data) {
			ciudades = JSON.parse(data)
			var content = '<option value="">Seleccione el origen</option>'

			for (let item in ciudades) {
				content += `
					<option value="${ciudades[item].cod_ciudad}">${ciudades[item].nom_ciudad}</option>
				`
			}
			$('#optOrigen').html(content)
			abilitar_boton()
		}
	})

	// Funcion para listar los destinos
	$('#optOrigen').on('change', function () {
		jQuery.ajax({
			url: 'https://wscootranshuila.teletiquete.com/WebService/pag_web.php?get_ciudad_destino='+this.value,
			type: 'GET',
			success: function (data) {
				ciudades_destino = JSON.parse(data)
				var content = '<option value="">Seleccione el destino</option>'

				for (let item in ciudades_destino) {
					content += `
						<option value="${ciudades_destino[item].cod_ciudad}">${ciudades_destino[item].nom_ciudad}</option>
					`
				}
				$('#optDestino').html(content)
				abilitar_boton()
			}
		})
	})
});

// Funcion para habilitar el boton 
function abilitar_boton() {
	var origen = jQuery('#optOrigen').val()
	var destino = jQuery('#optDestino').val()
	var fecha = jQuery('.txtFecSalida').val()

	if (origen != '' && destino != '' && fecha != '') {
		jQuery('#btn-comprar').removeClass('disabled')
	} else {
		jQuery('#btn-comprar').addClass('disabled')
	}
}

function click_compra() {
	setTimeout('cargar_compra()', 1000)
}

function cargar_compra() {
	var datos = jQuery('#form-compra').serialize()
	jQuery('#content-compra').html(`<iframe src="https://cootranshuila.teletiquete.com/?`+datos+`" frameborder="0" width="100%" style="height: 100vh !important;"></iframe>`)

	jQuery('#form-compra')[0].reset()
}