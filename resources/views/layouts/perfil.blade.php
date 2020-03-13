<div id="tab-profile" class="tab tab-profile">

    @auth
        <!-- TAB PROFILE -->
        <div class="header-profile">
            <div class="container">
                <div class="header-content">
                    <img src="{{ Auth::user()->avatar }}" alt="">
                    <div class="title-name">
                        <h5>{{ Auth::user()->name }}</h5>
                        <p><i class="ti-location-pin"></i>New York, US</p>
                    </div>
                    
                </div>
                <a href="/profile/" class="float-right text-right profile-settings"><i class="ti-settings"></i></a>
                
                <div class="profile-statistics segments">
                    <div class="row">
                        <div class="col-33">
                            <div class="content">
                                <h5>21</h5>
                                <p>Reviews</p>
                            </div>
                        </div>
                        <div class="col-33">
                            <div class="content">
                                <h5>65</h5>
                                <p>Favorites</p>
                            </div>
                        </div>
                        <div class="col-33">
                            <div class="content">
                                <h5>40</h5>
                                <p>Bookings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms just-seen-room">
            <div class="container">
                <div class="section-title section-title-large">
                    <h3>Just Seen</h3>
                </div>
                <div class="content">
                    <img src="assets/images/favorite-room3.jpg" alt="">
                    <div class="image-text">
                        <div class="row">
                            <div class="col-70">	
                                <h4>Single Rooms</h4>
                                <ul class="rate-product">
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                </ul>
                            </div>
                            <div class="col-30">
                                <div class="price-room">
                                    <h5>$125</h5>
                                    <p>Per night</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- divider space -->
                <div class="divider-space-content"></div>
                <!-- end divider space -->

                <div class="content">
                    <img src="assets/images/favorite-room2.jpg" alt="">
                    <div class="image-text">
                        <div class="row">
                            <div class="col-70">	
                                <h4>Family Rooms</h4>
                                <ul class="rate-product">
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                </ul>
                            </div>
                            <div class="col-30">
                                <div class="price-room">
                                    <h5>$160</h5>
                                    <p>Per night</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- divider space -->
                <div class="divider-space-content"></div>
                <!-- end divider space -->

                <div class="content">
                    <img src="assets/images/favorite-room1.jpg" alt="">
                    <div class="image-text">
                        <div class="row">
                            <div class="col-70">	
                                <h4>Suite Rooms</h4>
                                <ul class="rate-product">
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                    <li><i class="f7-icons">star_fill</i></li>
                                </ul>
                            </div>
                            <div class="col-30">
                                <div class="price-room">
                                    <h5>$141</h5>
                                    <p>Per night</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator"></div>
            </div>
        </div>
        <!-- END TAB PROFILE -->
    @endauth

    @guest
        <!-- sign in -->
		<div class="sign-in">
			
			<div class="header-room">
				<img src="assets/images/page/background.jpg" alt="">
			</div>

			<div class="form-box">
				<div class="container">
					<div class="form-content">
						<div class="title-form">
                            <h3>Bienvenido</h3>
                            <p>Inicia sesión con tu cuenta.</p>
						</div>
						<form class="list">
							<ul>
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<input type="email" placeholder="Correo electronico">
										</div>
									</div>
								</li>
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<input type="password" placeholder="Contraseña">
										</div>
									</div>
								</li>
							</ul>
						</form>
						<div class="button-submit">
							<button class="button">Ingresar</button>
						</div>

						<!-- divider -->
						<div class="divider-space-content"></div>
						<!-- end divider -->

						<div class="link-to">
							<p>¿No tienes una cuenta? <a href="/sign-up/">Registrarse</a></p>
						</div>

						<!-- divider -->
						<div class="divider-space-content"></div>
                        <!-- end divider -->
                        
						<div class="sign-with">
							<ul>
								<li>O ingresa con</li>
								<li>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('form-login-google').submit();"><i class="ti-google"></i></a>

                                    <form action="{{ route('google', 'google') }}" method="get" id="form-login-google" style="display:none;">
                                        @csrf
                                    </form>
									
								</li>
								<li>
									<a href="#"><i class="ti-facebook"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>

		</div>
		<!-- end sign in -->
    @endguest
    
</div>