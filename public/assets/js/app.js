"use strict";
// Dom7
var $ = Dom7;

// Init App
var app = new Framework7({
	root: '#app',
	theme: 'ios',
	routes: routes,
	view: {
		pushState: true,
	},
});

app.preloader.show();

window.onload = function(){
	app.preloader.hide();
}

var checkIn = app.calendar.create ({
	inputEl: '.check-in',
	dateFormat: 'yyyy-mm-dd',
	openIn: 'customModal',
	header: true,
	footer: true,
});

var checkOut = app.calendar.create ({
	inputEl: '.check-out',
	dateFormat: 'yyyy-mm-dd',
	openIn: 'customModal',
	header: true,
	footer: true,
});

var mainView = app.views.create('.view-main', {
	url: './index.html'
});

var searchbar = app.searchbar.create({
	el: '.searchbar',
	searchContainer: '.list_search',
	searchIn: '.item-title',
	on: {
		search(sb, query, previousQuery) {
			// console.log(query, previousQuery);
			jQuery('.page_list_search').removeClass('d-none')
		},
		disable() {
			jQuery('.page_list_search').addClass('d-none')
		},
		off() {
			jQuery('.page_list_search').addClass('d-none')
		}
	}
});

var fastPopup = app.popup.create({
	el: '.contact-form'
});

var condicionesPopup = app.popup.create({
	el: '.condicionesPopup'
});

$('.popup-open-condiciones').on('click', function () {
	console.log('HOli')
	condicionesPopup.open();
});


// ====== FUNCIONES ======= //

function myPopup(nomOrigen, codOrigen, nomDestino, codDestino) {

	let contentOrg = `<option value="${codOrigen}">${nomOrigen}</option>`
	let contentDes = `<option value="${codDestino}">${nomDestino}</option>`

	jQuery('#optOrigen_fast').html(contentOrg)
	jQuery('#optDestino_fast').html(contentDes)

	let f = new Date()
	jQuery('.check-in').val(f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate())

	console.log(f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate())

	fastPopup.open();
}

function changeCiudades() {
	let contentOrg = jQuery('#optDestino_fast').html()
	let contentDes = jQuery('#optOrigen_fast').html()

	jQuery('#optOrigen_fast').html(contentOrg)
	jQuery('#optDestino_fast').html(contentDes)
}

if (!readCookie( "acceptcookies" )) {
	var dynamicSheet = app.sheet.create({
		swipeToClose: true,
		backdrop: true,
		content: `<div class="sheet-modal my-sheet-swipe-to-close" style="height:auto; --f7-sheet-bg-color: #fff;">
					<div class="sheet-modal-inner">
						<div class="page-content">
							<div class="block-title block-title-large">Hola!</div>
							<div class="block">
								<p><b>Esta información es importante</b></p>
								<p style="font-size:10px;" class="text-justify">Usamos cookies y tecnologías parecidas para registrar sus visitas y preferencias con el objetivo de medir la efectividad de las campañas y mejorar nuestros sitios web. Para consultar la configuración de las cookies y obtener más información acerca de ellas, lea nuestra Política de cookies. Al hacer clic en «Acepto» en este banner o al navegar por nuestro sitio, muestra su consentimiento con el uso de cookies.</p>
								<div class="button-submit">
									<a href="#" class="button link sheet-close" style="color:#f0f0f0">Aceptar</a>
								</div>
							</div>
						</div>
					</div>
				</div>`,
		on: {
		  close: function (sheet) {
			document.cookie = "acceptcookies=true; max-age=1296000; path=/";
		  },
		}
	});
	dynamicSheet.open();
}

function readCookie(name) {
	return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + name.replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
}