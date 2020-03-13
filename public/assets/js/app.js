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

var checkIn = app.calendar.create ({
	inputEl: '#check-in',
	dateFormat: 'yyyy-mm-dd',
	openIn: 'customModal',
	header: true,
	footer: true,
});

var checkOut = app.calendar.create ({
	inputEl: '#check-out',
	dateFormat: 'yyyy-mm-dd',
	openIn: 'customModal',
	header: true,
	footer: true,
});

var mainView = app.views.create('.view-main', {
	url: './index.html'
});

var dynamicSheet = app.sheet.create({
	swipeToClose: true,
	backdrop: true,
	content: `<div class="sheet-modal my-sheet-swipe-to-close" style="height:auto; --f7-sheet-bg-color: #fff;">
				<div class="sheet-modal-inner">
					<div class="page-content">
						<div class="block-title block-title-large">Hola!</div>
						<div class="block">
							<p><b>Esta información es importante</b></p>
							<p style="font-size:10px;">Usamos cookies y tecnologías parecidas para registrar sus visitas y preferencias con el objetivo de medir la efectividad de las campañas y mejorar nuestros sitios web. Para consultar la configuración de las cookies y obtener más información acerca de ellas, lea nuestra Política de cookies. Al hacer clic en «Acepto» en este banner o al navegar por nuestro sitio, muestra su consentimiento con el uso de cookies.</p>
						</div>
					</div>
				</div>
			</div>`,
	on: {
	  open: function (sheet) {
		// console.log('Sheet open');
	  },
	  opened: function (sheet) {
		// console.log('Sheet opened');
	  },
	}
});