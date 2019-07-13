<?php include('header.php'); ?>

<div class="process process1">
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
                            Gracias a tí un EXATEC participará para ser reconocido por su extraordinaria trayectoria.  
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-form">
        <div class="step-container">
            <ul class="custom-list step-list">
                <li class="selected">1. Datos de contacto</li>
                <li>2. Datos del nominado</li>
                <li>3. Resumen</li>
            </ul>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">
                    <div class="info-contact-content">
                        <h3 class="heading heading-03">1. Datos del contacto</h3>
                        <p class="info-contact-txt">
                            Es posible que necesitemos de tu apoyo para verificar la información de tu nominado, por que te pedimos completar los siguientes campos. 
                        </p>
                    </div>

                    <form class="form-custom form-process">
                        <p class="title-section-checkbox">Selecciona una opción</p>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3">
                                <div class="wrapper-input wrapper-checkbox">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" value="1" id="checkbox-persona-moral" name="" class="input-checkbox" />
                                        <label for="checkbox-persona-moral" class="label-checkbox"></label>
                                    </div>
                                    <p class="input-label">Persona moral</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="wrapper-input wrapper-checkbox">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" value="1" id="checkbox-persona-fisica" name="" class="input-checkbox" />
                                        <label for="checkbox-persona-fisica" class="label-checkbox"></label>
                                    </div>
                                    <p class="input-label">Persona física</p>
                                </div>
                            </div>
                        </div>
                        <hr class="separator">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4">
                                <div class="wrapper-input">
                                    <label class="input-label" for="name">Nombre completo*</label>
                                    <input type="text" class="input-custom" name="name" placeholder="Fernando Raúl Montemayor Díaz">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="wrapper-input">
                                    <label class="input-label" for="name">Número de celular</label>
                                    <input type="text" class="input-custom" name="name" placeholder="811 320 78 56">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="wrapper-input">
                                    <label class="input-label" for="name">Email</label>
                                    <input type="text" class="input-custom" name="name" placeholder="fernando.montemayor@gmail.com">
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