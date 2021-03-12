<?php
    $imagen_video_uno=get_field('imagen-video-uno');

    $imagen_video_dos=get_field('imagen-video-dos');

    $fondo_informacion_video=get_field('fondo_informacion_video');

?>

<section id="videos" class="container-fluid">


    <div class="row filaVideos">
        <div class="col-12 col-md-6 align-items-center justify-content-center" style="background-image: url(<?php echo $imagen_video_dos; ?>); background-repeat: no-repeat; background-size: cover;">
            <div class="text-center">
              <a href="https://torresdesaira.com/apto-modelo/">              <img src="https://torresdesaira.com/wp-content/uploads/2020/08/play-video.png" alt="" width="150px" height="auto" style="padding: 10rem 0;" id="iconV">
</a>
            </div>
        </div>
        <div class="col-12 col-md-6 informacionVideo" style="background-image: url(<?php echo $fondo_informacion_video; ?>); background-repeat: no-repeat; background-size: cover;" >
            <div class="row">
                <div class="col-12 text-left">
                    <img src="https://torresdesaira.com/wp-content/uploads/2020/08/pajarito-e1596729488955.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12 tituloInformacionVideo">
                    <p>Conoce nuestro apartamento modelo </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-left descubreInformacionVideo">
                    <p>Te invitamos a que conozcas nuestro apartamento modelo.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-left .conoceMas">
                    <p>Conoce más</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-left">
                    <button formtarget="_blank" onclick="location.href='https://torresdesaira.com/wp-content/uploads/2020/09/brochure-3-4_compressed.pdf'" class="boton botonUno">DESCARGA EL BROCHURE</button>
                </div>
                <div class="col-6 text-left">
                    <button type="submit" formtarget="_blank" onclick="location.href='http://wa.me/573117404302'" class="boton botonDos">CONTACTA UN ASESOR</button>
                </div>
            </div>
            <div class="row">
                <div class="col-8 text-left">
                    <button type="submit" formtarget="_blank" onclick="location.href='https://torresdesaira.com/apto-modelo/ '" class="boton botonDos">¿Cómo se entrega el apartamento?</button>
                </div>
            </div>

        </div>
    </div>
    <div class="row filaVideos">
        <div class="col-12 col-md-6 align-items-center justify-content-center" style="background-image: url(<?php echo $imagen_video_uno; ?>); background-repeat: no-repeat; background-size: cover;">
            <div class="text-center">
              <a href="https://torresdesaira.com/nuestro-proyecto/">
                <img src="https://torresdesaira.com/wp-content/uploads/2020/08/play-video.png" alt="" width="150px" height="auto" style="padding: 10rem 0;" id="iconV">
              </a>
            </div>
            </div>
        <div class="col-12 col-md-6 informacionVideo" style="background-image: url(<?php echo $fondo_informacion_video; ?>); background-repeat: no-repeat; background-size: cover;" >
            <div class="row">
                <div class="col-12 text-left">
                    <img src="https://torresdesaira.com/wp-content/uploads/2020/08/pajarito-e1596729488955.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12 tituloInformacionVideo">
                    <p>Conoce nuestro proyecto </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-left descubreInformacionVideo">
                    <p>Descubre nuestro poroyecto Torres de Saira.Te invitamos a que conozcas nuestros acabados, nuestros espacios y todos los detallaes diseñados para ti.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-left .conoceMas">
                    <p>Conoce más</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-left">
                    <button formtarget="_blank" onclick="location.href='https://torresdesaira.com/wp-content/uploads/2020/09/brochure-3-4_compressed.pdf'" class="boton botonUno">DESCARGA EL BROCHURE</button>
                </div>
                <div class="col-6 text-left">
                    <button type="submit" formtarget="_blank" onclick="location.href='http://wa.me/573117404302'" class="boton botonDos">CONTACTA UN ASESOR</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-left">
                    <p class="notaLegal">Los Apartamentos se entregan en obra gris . El amoblamiento dispuesto en el apartamento modelo  son exclusivamente una representación de lo que puede ser el  funcionamiento del apartamento, por lo cual no hacen parte de la oferta comercial del inmueble</p>
                </div>
            </div>
        </div>
    </div>
</section>
