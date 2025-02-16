<div class="container pt-5">
    <h1 id="contacto" class="mb-5">Contáctanos</h1>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4">
            <div class="border mb-5 bg-info-subtle rounded" loading="lazy">
                <h3 class="text-center pt-5"><i class="bi bi-geo-alt"></i> Ubicación</h3>
                <p class="text-center pb-5">
                    Entre Talca y la Región de Los Lagos
                </p>
            </div>
            <div class="border mb-5 bg-info-subtle rounded">
                <h3 class="text-center pt-5"><i class="bi bi-telephone"></i> Teléfono</h3>
                <p class="text-center pb-5">+56 9 5018 6583</p>
            </div>
        </div>
        <div class="col-md-7 col-lg-8 order-first">
        <form id="contactForm" class="needs-validation" action="functions/procesar_formulario.php" method="POST" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="firstName" name="nombre" required>
                        <div class="invalid-feedback">
                            Ingrese su nombre por favor
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="lastName" name="apellido" required>
                        <div class="invalid-feedback">
                            Ingrese su apellido por favor
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Ingrese su correo de contacto
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="address" name="direccion" placeholder="Dirección, Comuna" required>
                        <div class="invalid-feedback">
                            Ingrese por favor su dirección
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="ej: 999999999" required>
                        <div class="invalid-feedback">
                            Ingrese por favor su teléfono
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="state" class="form-label">Consulta</label>
                        <select class="form-select" id="state" name="consulta" required>
                            <option value="">Seleccione...</option>
                            <option>Parcelas</option>
                            <option>Casa con Parcela</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor seleccione una opción
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="validationTextarea" name="mensaje" placeholder="Por favor ingrese su mensaje" required></textarea>
                        <div class="invalid-feedback">
                            Mensaje no ingresado, por favor ingrese su mensaje
                        </div>
                    </div>
                </div>

                <hr class="my-4" />

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Acepto los términos y condiciones
                    </label>
                    <div class="invalid-feedback">
                        Tienes que aceptar antes de enviar
                    </div>
                </div>

                <hr class="my-4" />

                <div class="g-recaptcha pb-4" align="center" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                
                <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>