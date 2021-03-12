<?php
    $fondoCaracteristicas=get_field('fondo_caracteristicas');
    $fondo_curva=get_field('fondo_curva');

 ?>

<section id="caracteristicas" class="container-fluid contenedorCaracteristicas" style="background-image: url(<?php echo $fondoCaracteristicas; ?>); background-repeat: no-repeat;
  background-size: cover; background-position: center; padding-top:80px;">
    <div class="row ">
        <div class="col-12 contenedorTituloCaracteristicas">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-12 col-md-4 text-center tituloCaracteristicas">
                    <h2>Características</h2>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>

        <div class="col-12 contenedorInformacionCaracteriticas">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="textoCaracteristicas col-12 col-md-8 text-center">
                    <p class="text-center">
                      Encuentra en Torres de Saira beneficios irresistibles, la ubicación y nuestras zonas comunes te brindan una experiencia excepcional que nos diferencia de otros. El diseño de los apartamentos te ofrece comodidad y luz natural. Lo mejor de todo, nuestras facilidades de pago harán que el sueño de tener tu propio hogar sea una realidad.
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

        <div class="contenedorIconosCaractereristicas col-12">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-6 col-md-2 iconoCaracteristica text-center">
                    <img src="https://wordpress-375621-1382727.cloudwaysapps.com/wp-content/uploads/2020/08/alta-valorizacion.png" alt="">
                    <p class="text-center">Zona de alta valorización en el norte de Bogotá</p>
                </div>
                <div class="col-6 col-md-2 iconoCaracteristica text-center">
                    <img src="https://wordpress-375621-1382727.cloudwaysapps.com/wp-content/uploads/2020/08/facilidad-pago.png" alt="">
                    <p class="text-center">Facilidades de pago</p>
                    </div>
                <div class="col-6 col-md-2 iconoCaracteristica text-center">
                    <img src="https://wordpress-375621-1382727.cloudwaysapps.com/wp-content/uploads/2020/08/2h-2años.png" alt="">
                    <p class="text-center">2 habitaciones y 2 baños</p>
                </div>
                <div class="col-6 col-md-2 iconoCaracteristica text-center">
                    <img src="https://wordpress-375621-1382727.cloudwaysapps.com/wp-content/uploads/2020/08/shut-de-basuras.png" alt="">
                    <p class="text-center">Shut de basuras por torre </p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-6 col-md-2 iconoCaracteristica text-center">
                    <img src="https://wordpress-375621-1382727.cloudwaysapps.com/wp-content/uploads/2020/08/metro-cuadrado.png" alt="">
                    <p class="text-center">Mejor precio por m2</p>
                    </div>
                <div class="col-6 col-md-2 iconoCaracteristica text-center">
                    <img src="https://wordpress-375621-1382727.cloudwaysapps.com/wp-content/uploads/2020/08/flor-morado.png" alt="">
                    <p class="text-center">Con respaldo de Constructora Flormorado</p>
                    </div>
                <div class="col-6 col-md-2 iconoCaracteristica text-center">
                    <img src="https://wordpress-375621-1382727.cloudwaysapps.com/wp-content/uploads/2020/08/zonas-verdes.png" alt="">
                    <p class="text-center">Zonas verdes con amplios jardines</p>
                </div>
                <div class="col-6 col-md-2 iconoCaracteristica text-center">
                    <img src="https://wordpress-375621-1382727.cloudwaysapps.com/wp-content/uploads/2020/08/ascensor.png" alt="">
                    <p class="text-center"> 2 ascensores por torre</p>
                </div>
                <div class=" col-md-2"></div>
            </div>
        </div>
    </div>
</section>
<div class=" fondoCurva">
    <img src="<?php echo $fondo_curva; ?>" alt="">
</div>
