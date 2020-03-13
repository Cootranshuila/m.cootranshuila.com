@extends('layouts.base')

@section('content')
	<div id="app">

		<div class="view view-main view-init ios-edges" data-url="/">
			<div class="page page-home page-with-subnavbar">

				<div class="toolbar tabbar tabbar-labels toolbar-bottom">
					<div class="toolbar-inner">
						<a href="#tab-pages" class="tab-link"> <i class="ti-menu"></i> </a>
						<a href="#tab-profile" class="tab-link"> <i class="ti-user"></i> </a>
						<a href="#tab-home" class="tab-link tab-link-active"> <img src="assets/images/page/logo-icon.png" alt=""> </a>
						<a href="#tab-discover" class="tab-link"> <i class="ti-map-alt"></i> </a>
						<a href="#tab-rooms" class="tab-link"> <i class="ti-comment-alt"></i> </a>
					</div>
				</div>
				
				<div class="tabs">

					<!-- Seccion Menu -->
					@include('layouts.menu')

					<!-- Seccion Perfil -->
					@include('layouts.perfil')

					<!-- Seccion Inicio -->
					@include('layouts.inicio')

					<!-- Seccion Turismo -->
					@include('layouts.turismo')

					<!-- Seccion Chat -->
					@include('layouts.chat')

				</div>
			</div>
		</div>
	</div>
@endsection