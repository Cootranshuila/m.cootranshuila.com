jQuery(document).ready(function () {

	// Peticion par listar las ciudades de Origen
	jQuery.ajax({
		url: 'https://wscootranshuila.teletiquete.com/WebService/pag_web.php?get_ciudad',
		type: 'GET',
		headers: {},
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

	jQuery('.dynamic-popup').on('click', function () {
		dynamicPopup.open();
	});
	
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

function click_compra(numForm) {
	setTimeout('cargar_compra('+numForm+')', 1000)
}

function cargar_compra(opt) {
	if (opt == 1) {
		var datos = jQuery('#form-compra').serialize()
	} else {
		var datos = jQuery('#form-compra-fast').serialize()
	}
	jQuery('#content-compra').html(`<iframe src="https://cootranshuila.teletiquete.com/?`+datos+`" frameborder="0" width="100%" style="height: 100vh !important;"></iframe>`)

	jQuery('#form-compra')[0].reset()
	jQuery('#form-compra-fast')[0].reset()

	fastPopup.close();
}

function perfil() {
	//Peticion para cargar la vista del perfil y los datos 
	jQuery.ajax({
		url: '/profile',
		success: function (data) {
			jQuery('#content-profile').html(data)
		}
	})
}
