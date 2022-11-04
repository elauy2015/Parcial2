<?php
    if (session_status()==1)session_start();
?>
    <section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-9e13">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-contain u-image-default u-image-1" src="img/image.png" alt="" data-image-width="302" data-image-height="260">
            <div class="u-container-style u-group u-shape-rectangle u-white u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <div class="u-form u-form-1">
                        <!-- inicia form -->
                        <form action="<?php echo "index.php?c=" . seg::codificar("usuario") . "&m=" . seg::codificar("validar") ?>" method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                            <div class="u-form-group u-form-name">
                                <label for="name-7bf1" class="u-label">Usuario</label>
                                <input type="text" placeholder="Introduzca su usuario" id="name-7bf1" name="Usuario" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                            </div>
                            <div class="u-form-email u-form-group">
                                <label for="email-7bf1" class="u-label">Contraseña</label>
                                <input type="password" placeholder="Introduzca una contraseña valida" id="email-7bf1" name="Contra" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                            </div>
                            <div class="u-form-checkbox u-form-group u-form-group-3">
                                <input type="checkbox" id="checkbox-fa15" name="checkbox" value="On" required="required">
                                <label for="checkbox-fa15" class="u-label">Recuerdame, no me dejes por favor ♫♫</label>
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <button type="subtmit" class="btn btn-dark btn-lg">Enviar</button>
                            </div>
                            <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
                        </form>
                        <!-- termina form -->
                    </div>
                </div>
            </div>
            <p class="u-text u-text-custom-color-1 u-text-default u-text-1">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="#">Olvidaste la contraseña?</a>
            </p>
            <p class="u-text u-text-custom-color-1 u-text-default u-text-2">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="#">No tienes cuenta?</a>
            </p>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

