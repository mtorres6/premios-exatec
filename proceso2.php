<?php include('header.php'); ?>

<div class="process process2">
    <div class="banner">    
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-5 offset-xl-1 offset-lg-1">
                    <div class="container-main-title">
                        <h1 class="heading heading-01 main-title">
                            Bienvenido al proceso de nominación
                        </h1>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 offset-xl-1 offset-lg-1">
                    <div class="container-main-txt">
                        <p class="heading heading-02 main-txt">
                            Gracias a ti un EXATEC participará en proceso de selección para ser reconocido por su  trayectoria extraordinaria de EXATEC.  
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper-form">
        <div class="step-container">
            <ul class="custom-list step-list">
                <li>1. Datos de contacto</li>
                <li class="selected">2. Datos del nominado</li>
                <li>3. Resumen</li>
            </ul>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">
                    <div class="info-contact-content">
                        <h3 class="heading heading-03">2. Datos del nominado</h3>
                        <p class="info-contact-txt">
                            Recuerda que al realizar tu nominación puedes compartir ejemplos personales, así como cuidar el orden, sintaxis, conexión de ideas, gramática y ortografía en la postulación y portafolio de evidencias, recuerda que esta información será revisada por los miembros del jurado.
                        </p>
                    </div>

                    <form class="form-custom form-process">
                        <p class="title-section-checkbox">
                            ¿Se trata de una nominación póstuma?
                            <span class="title-italic"> (no más de 5 años)</span>
                        </p>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3">
                                <div class="wrapper-input wrapper-checkbox">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" value="1" id="checkbox-postumo-si" name="" class="input-checkbox" />
                                        <label for="checkbox-postumo-si" class="label-checkbox"></label>
                                    </div>
                                    <p class="input-label">Sí</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="wrapper-input wrapper-checkbox">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" value="1" id="checkbox-postumo-no" name="" class="input-checkbox" />
                                        <label for="checkbox-postumo-no" class="label-checkbox"></label>
                                    </div>
                                    <p class="input-label">No</p>
                                </div>
                            </div>
                        </div>
                        <hr class="separator">
                        <p class="title-section-checkbox">
                            Selecciona uno o dos de las categorías en las que deseas que participe tu nominado
                        </p>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3">
                                <div class="wrapper-input wrapper-checkbox">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" value="1" id="checkbox-trayectoria-exatec" name="" class="input-checkbox" />
                                        <label for="checkbox-trayectoria-exatec" class="label-checkbox"></label>
                                    </div>
                                    <p class="input-label">Trayectoria EXATEC</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="wrapper-input wrapper-checkbox">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" value="1" id="checkbox-merito-exatec" name="" class="input-checkbox" />
                                        <label for="checkbox-merito-exatec" class="label-checkbox"></label>
                                    </div>
                                    <p class="input-label">Mérito EXATEC</p>
                                </div>
                            </div>
                        </div>
                        <div class="row personal-info-fields">
                            <div class="col-xl-4 col-lg-4 custom-columns">
                                <div class="wrapper-input wrapper-error">
                                    <label class="input-label" for="name">Nombre completo*</label>
                                    <input type="text" class="input-custom" name="name" placeholder="Fernando Raúl Montemayor Díaz">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 custom-columns">
                                <div class="wrapper-input">
                                    <label class="input-label" for="name">Número de celular</label>
                                    <input type="text" class="input-custom" name="name" placeholder="811 320 78 56">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 custom-columns">
                                <div class="wrapper-input">
                                    <label class="input-label" for="name">Email</label>
                                    <input type="text" class="input-custom" name="name" placeholder="fernando.montemayor@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="wrapper-input wrapper-file">
                                    <p class="input-label">Completa y sube el formato de portafolio de evidencias</p>
                                    <a class="form-link" href="#">
                                        Descargar formato portafolio de evidencias.xml
                                    </a>
                                    <div class="container-input-file">
                                        <label class="form-input form-input--file ">
                                            <span class="form-input--file-text">Archivo</span>
                                            <span class="form-input--file-button button-general button-primary button-input-file">Cargar archivo</span>
                                            <input class="form-input-file" type="file" id="file" accept="image/*" size="14" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-button">
                            <a class="button-general button-primary button-form-process" href="#">
                                Siguiente paso 
                                <i class="fas fa-chevron-right button-icon"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="separator end-page-separator">
        </div>
    </div>
</div>

<?php include('footer.php'); ?>