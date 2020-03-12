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
			}
		})
	})

	// PRUEBA!
	jQuery('#btn-compra').click(function () {
		// jQuery('#content-compra').text('Holi, haz hecho clikc')
		console.log(window.location.pathname)
	})
	
});

// <iframe src="https://cootranshuila.teletiquete.com/?optOrigen=72&optDestino=2344&txtFecSalida=2020-03-12&txtFecRegreso=" frameborder="0" width="100%" style="height: 100vh !important;"></iframe>

function cargar_compra() {
	jQuery('#content-compra').html(`<iframe src="https://cootranshuila.teletiquete.com/?optOrigen=72&optDestino=2344&txtFecSalida=2020-03-12&txtFecRegreso=" frameborder="0" width="100%" style="height: 100vh !important;"></iframe>`)
	console.log(window.location.hash)
}