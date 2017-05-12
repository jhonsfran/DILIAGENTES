<div class="block-header">
    <!-- Contact Section -->
    <form id="login" name="login_user" action="" validate>
        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Nombre de Usuario</label>
                <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Ingresa tu nombre de usuario.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Contraseña</label>
                <input type="password" class="form-control" placeholder="Contraseña" id="pswd" required data-validation-required-message="Ingresa tu contraseña">

                <p class="help-block text-danger"></p>
            </div>
        </div>
        <br>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" id="recuerdame"> Recuerdame
                    </label>
                </div>
            </div>
            <div class="col-lg-6">
                <button id="ingresoLogin" type="button" class="btn btn-success btn-lg">Ingresar</button>
            </div>
        </div>

        <br>
    </form>
</div>