<div id="tab-home" class="tab tab-active tab-home">

    <!-- TAB HOME -->
    <div class="home-header">
        <form class="searchbar">
            <div class="searchbar-inner">
                <div class="searchbar-input-wrap">
                    <input type="search" placeholder="Buscar un destino">
                    <i class="searchbar-icon"></i>
                    <span class="input-clear-button"></span>
                </div>
                <span class="searchbar-disable-button">Cancelar</span>
            </div>
        </form>
    </div>
    <div class="container d-non">
        <div class="quick-reservation quick-reservation-home form-box">
            <div class="header-caption">
                <div class="header-title">
                    <h2>Cootranshuila</h2>
                </div>
            </div>
            <div class="form-content reservation-form">
                <div class="section-title mt-3 text-center">
                    <h3>¡Compra ya tu tiquete!</h3>
                </div>
                <form class="list" method="GET" action="https://cootranshuila.teletiquete.com/" id="form-compra">
                    <ul>
                        <li class="item-content item-input">
                            <div class="item-inner">
                                <div class="item-input-wrap input-dropdown-wrap">
                                    <select placeholder="Ciudad Origen" id="optOrigen" name="optOrigen" required validate>
                                        <option value="" disabled selected>Ciudad de Origen</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="item-content item-input">
                            <div class="item-inner">
                                <div class="item-input-wrap input-dropdown-wrap">
                                    <select placeholder="Ciudad Destino" id="optDestino" name="optDestino" required validate>
                                        <option value="" disabled selected>Ciudad de Destino</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li class="item-content item-input">
                            <div class="item-inner"> 
                                <div class="item-input-wrap">
                                    <input type="text" placeholder="Fecha de ida" readonly="readonly" id="check-in" class="txtFecSalida" name="txtFecSalida" required validate>
                                </div>
                            </div>
                        </li>
                        <li class="item-content item-input">
                            <div class="item-inner">
                                <div class="item-input-wrap">
                                    <input type="text" placeholder="Fecha de regreso (opcional)" readonly="readonly" id="check-out" name="txtFecRegreso">
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="button-submit">
                        <a href="/compra/" class="button disabled" onclick="click_compra()" id="btn-comprar" style="color:#f0f0f0">Enviar</a>
                    </div>
                </form>
                
                <img src="assets/images/page/pagos.png" alt="Metodos de pago" class="img-fluid p-3">
            </div>
        </div>

        <div class="room-category segments">
            <div class="swiper-container swiper-init" data-space-between="10" data-slides-per-view="auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <div class="image">
                                <img src="assets/images/room-category1.jpg" alt="">
                                <div class="image-caption">
                                    <h6>Neiva - Bogota</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <div class="image">
                                <img src="assets/images/room-category2.jpg" alt="">
                                <div class="image-caption">
                                    <h6>Double Rooms</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <div class="image">
                                <img src="assets/images/page/rutas/neiva-cali.jpg" alt="">
                                <div class="symbol-info">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="image-caption">
                                <h6>Neiva - Cali</h6>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <div class="image">
                                <img src="assets/images/room-category4.jpg" alt="">
                                <div class="image-caption">
                                    <h6>Family Rooms</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <div class="image">
                                <img src="assets/images/room-category5.jpg" alt="">
                                <div class="image-caption">
                                    <h6>Suite Rooms</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="favorite-rooms">
            <div class="section-title">
                <h3>Cootranshuila Tours</h3>
            </div>
            <div class="swiper-container swiper-init" data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" data-slides-per-view="auto">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <img src="assets/images/page/tours/piscilago_22_marzo.jpg" alt="">
                            <div class="image-caption">
                                <div class="row">
                                    <div class="col-70">
                                        <h4>Piscilago</h4>
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
                                            <h5>$120.000</h5>
                                            <p>22 de Marzo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <img src="assets/images/page/tours/jaimeduque_29_marzo.jpg" alt="">
                            <div class="image-caption">
                                <div class="row">
                                    <div class="col-70">
                                        <h4>Paque Jaime Duque</h4>
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
                                            <h5>$170.000</h5>
                                            <p>29 de Marzo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrap-button">
                <button class="button">Ver mas</button>
            </div>
        </div>

        <div class="services">
            <div class="section-title">
                <h3>Nuestros Servicios</h3>
            </div>
            <div class="swiper-container swiper-init" data-space-between="10" data-slides-per-view="auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <div class="image">
                                <img src="assets/images/page/services/flota.jpg" alt="">
                            </div>
                            <div class="image-caption">
                                <h6>Nuestra Flota</h6>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <div class="image">
                                <img src="assets/images/services2.jpg" alt="">
                            </div>
                            <div class="image-caption">
                                <h6>Carga y encomiendas</h6>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <div class="image">
                                <img src="assets/images/services3.jpg" alt="">
                            </div>
                            <div class="image-caption">
                                <h6>Estacion de servicios</h6>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/room-single/">
                            <div class="mask"></div>
                            <div class="image">
                                <img src="assets/images/services4.jpg" alt="">
                                <div class="symbol-info">
                                    <span>New</span>
                                </div>
                            </div>
                            <div class="image-caption">
                                <h6>Servicio GPS</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="room-promo segments">
            <div class="content">
                <img src="assets/images/banner.png" alt="">
            </div>
        </div>

        <div class="newsletter">
            <div class="section-title">
                <h3>Newsletter</h3>
                <p>Enter you email to recieive newsletters</p>
            </div>
            <form class="list">
                <div class="item-content item-input">
                    <div class="item-inner">
                        <div class="item-input-wrap">
                            <input type="email" placeholder="Enter Your Email">
                        </div>
                    </div>
                </div>
            </form>
            <div class="wrap-button">
                <button class="button">Send</button>
            </div>
        </div>
        <div class="separator"></div>
    </div>
    <!-- END TAB HOME -->						

</div>