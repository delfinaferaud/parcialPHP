<section class="container mt-5">
    <h2 class="mb-3 fs-1 fw-bold text-center">
        Suscripción
    </h2>
    <p class=" mb-3 fw-medium text-center">
        A continuación completá tus datos para el envío de tu libro. Luego te va a llegar un mail donde vas a poder
        realizar el pago.
    </p>

    <?php if (isset($_GET['mensaje']) && $_GET['mensaje'] === 'ok'): ?>
        <p class="alert alert-success text-center">¡Gracias por sumarte! Revisá tu casilla de correo</p>
    <?php else: ?>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form method="POST" action="index.php?seccion=contacto&mensaje=ok">
                    <div class="row g-3 fw-medium">
                        <div class="mb-3 col-md-6">
                            <label for="inputNombre" class="form-label">Nombre *</label>
                            <input type="text" class="form-control" id="inputNombre" name="inputNombre" required />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputApe" class="form-label">Apellido *</label>
                            <input type="text" class="form-control" id="inputApe" name="inputApe" required />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputTelefono" class="form-label">Celular *</label>
                            <input type="tel" class="form-control" id="inputTelefono" name="inputTelefono" required />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputDni" class="form-label">Número de documento *</label>
                            <input type="number" class="form-control" id="inputDni" name="inputDni" required />
                        </div>
                        <div class="mb-3 col-12">
                            <label for="inputMail" class="form-label">Correo electrónico *</label>
                            <input type="email" class="form-control" id="inputMail" name="inputMail" required />
                        </div>
                        <div class="mb-3 col-md-8">
                            <label for="inputDireccion" class="form-label">Dirección *</label>
                            <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" required />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="inputLocalidad" class="form-label">Localidad *</label>
                            <input type="text" class="form-control" id="inputLocalidad" name="inputLocalidad" required />
                        </div>
                        <div class="mb-3 col-md-6">
                            <div class="form-check">
                                <input type="radio" id="entrega" name="entrega" value="envio" checked
                                    class="form-check-input" />
                                <label for="entrega" class="form-check-label">Envío a domicilio</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="entrega2" name="entrega" value="retiro" class="form-check-input" />
                                <label for="entrega2" class="form-check-label">Retiro por sucursal</label>
                            </div>
                        </div>
                    </div>


                    <div class="d-md-flex justify-content-center">
                        <input type="submit" class="cart fs-3 px-3" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
</section>