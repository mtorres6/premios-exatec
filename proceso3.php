<?php include('header.php'); ?>

<div class="process process3">
    <div class="banner banner-simple banner-process1">
        <div class="bg-title">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <h1 class="title">Nomina a un EXATEC</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="fig-scroll"></div>
        <div class="filter"></div>
    </div>
    <div class="container-fluid">
        <div class="col-xl-6 col-lg-8 offset-xl-1 offset-lg-1">
            <div class="container-main-txt">
                <p class="heading heading-02 main-txt">
                    Gracias a ti un EXATEC participará para ser reconocido por su extraordinaria trayectoria.  
                </p>
            </div>
        </div>
    </div>

    <div class="wrapper-form">
        <div class="step-container">
            <ul class="custom-list step-list">
                <li >1<span class="hidden-sm-up">. Datos de contacto</span></li>
                <li>2<span class="hidden-sm-up">. Datos del nominado</span></li>
                <li class="selected">3. Resumen</li>
            </ul>
        </div>

        <div class="container-fluid background-form">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">
                    <div class="info-contact-content">
                        <h3 class="heading heading-03">3. Curriculum del nominado</h3>
                        <p class="info-contact-txt">
                            Por último necesitamos el curriculum de la persona nominada. Recuerda que esta información será revisada por los miembros del jurado.
                        </p>
                    </div>
                    <form class="form-custom form-process">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="wrapper-input wrapper-file">
                                    <p class="input-label">Sube el currculum de la persona nominada</p>
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
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="wrapper-input">
                                    <label class="input-label" for="name">Escribe ejemplos personales</label>
                                    <input type="text" class="input-custom" name="name" placeholder="Escribir">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-lg-8 offset-xl-6 offset-lg-4">
                                <div class="wrapper-button">
                                    <a class="button-general button-primary button-form-process" href="gracias.php">
                                        Siguiente paso 
                                        <i class="fas fa-chevron-right button-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>