<?php echo $this->extend('front\layouts\layout') ?>
<?php echo $this->section('contenido'); ?>



<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Empieza tu Viaje con Serafina</h1>
            <p class="col-lg-10 fs-4 text-justify">Regístrate y sumérgete en el mundo de Serafina, donde cada mate artesanal es una obra de arte esperando ser descubierta. Al crear tu cuenta, obtendrás acceso inmediato para adquirir estos tesoros únicos. Cada compra es un paso más en la tradición y la innovación. No esperes más, regístrate y haz tuyo el mate que resuene contigo.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput-Usuario" placeholder="fulanito_kpo123" required>
                    <label for="floatingInput">Nombre de Usuario</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput-Nombre" placeholder="Fulanito" required>
                    <label for="floatingInput">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput-Apellido" placeholder="Inserte Apellido" required>
                    <label for="floatingInput">Apellido</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput-Email" placeholder="name@example.com" required>
                    <label for="floatingInput">Correo Electronico</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Contraseña</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control" id="floatingInput-Tel" placeholder="Num de tel" required>
                    <label for="floatingInput">Numero de Telefono</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput-Adress" placeholder="Direccion" required>
                    <label for="floatingInput">Direccion</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" class="" id="notRobotCheck" required value="remember-me" class="form-check-label" for="notRobotCheck"> No soy un robot
                    </label>

                </div>
                <button class="w-100 btn btn-lg bg-custom-btn" type="submit">Registrarme!</button>
                <hr class="my-4">
                <small class="text-body-secondary">Ya estas registrado !?</small>
                <button class="w-100 btn btn-lg bg-custom-btn-1" type="button" onclick="window.location.href='<?php echo base_url('login'); ?>'">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</div>




<?php echo $this->endSection(); ?>