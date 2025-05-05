<section class="mb-5 formulario">
    <h2 class="mb-4 fs-1 fw-bold text-center">
        Suscripción
    </h2>
    <p class="fw-bold text-center">
        A continuación completá tus datos para el envío de tu libro. Luego te va a llegar un mail donde vas a poder
        realizar el pago.
    </p>

    <?php if (isset($_GET['mensaje']) && $_GET['mensaje'] === 'ok'): ?>
        <div class="alert alert-success text-center">¡Gracias por contactarte!</div>
    <?php else: ?>

        <form class="row d-md-flex justify-content-center" method="POST" action="index.php?seccion=procesar">
            <div class="mb-3 col-12 col-md-6 form-flex d-md-flex justify-content-between">
                <div class="form-inputs">
                    <div class="mb-3">
                        <label for="inputNombre" class="form-label fs-4">Nombre *</label>
                        <input type="text" class="form-control" id="inputNombre" name="inputNombre" required />
                    </div>
                    <div class="mb-3">
                        <label for="inputApe" class="form-label fs-4">Apellido *</label>
                        <input type="text" class="form-control" id="inputApe" name="inputApe" required />
                    </div>
                    <div class="mb-3">
                        <label for="inputTelefono" class="form-label fs-4">Celular *</label>
                        <input type="tel" class="form-control" id="inputTelefono" name="inputTelefono" required />
                    </div>
                    <div class="mb-3">
                        <label for="inputMail" class="form-label fs-4">Correo electrónico *</label>
                        <input type="email" class="form-control" id="inputMail" name="inputMail" required />
                    </div>
                    <div class="mb-3">
                        <label for="inputDni" class="form-label fs-4">Número de documento *</label>
                        <input type="number" class="form-control" id="inputDni" name="inputDni" required />
                    </div>
                    <div class="mb-3">
                        <label for="inputDireccion" class="form-label fs-4">Dirección *</label>
                        <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" required />
                    </div>
                    <div class="mb-3">
                        <label for="inputLocalidad" class="form-label fs-4">Localidad *</label>
                        <input type="text" class="form-control" id="inputLocalidad" name="inputLocalidad" required />
                    </div>
                    <div class="mb-3">

                        <input type="radio" id="entrega" name="entrega" value="envio" checked />
                        <label for="entrega" class="form-label fs-4">Envío a domicilio</label>
                        <input type="radio" id="entrega2" name="entrega" value="retiro" />
                        <label for="entrega2" class="form-label fs-4">Retiro por sucursal</label>
                    </div>
                </div>

            </div>
            <div class="d-md-flex justify-content-center">
                <input type="submit" class="btn btn-primary fs-3 mb-3" value="Enviar">
            </div>
        </form>
    <?php endif; ?>
</section>