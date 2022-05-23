<!--Contenedor Principal (cuepo de la pagina)-->
    <div class="container" id="pagina-registro">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 cold-md-8 col-md-offset-2">
                  <h1 class="titulo-de-pagina">Pagina de Registro</h1>  

                  <hr> 
                  <!-- Formulario de Registro -->
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
                      <h2>Registrate <small>y comienza a crear juegos</small></h2>
                      <hr>
                      <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-lg" name="nombre" placeholder="Nombre" tabindex="1" autofocus>
                            </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                                  <input type="text" class="form-control input-lg" name="apellido" placeholder="Apellido" tabindex="2" >
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                 <input type="text" class="form-control input-lg" name="usuario" placeholder="Nombre de Usuario" tabindex="3">
                            </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                                  <input type="text" class="form-control input-lg" name="email" placeholder="Email" tabindex="4" >
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-lg" name="clave" placeholder="Contraseña" tabindex="5">
                            </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                                  <input type="text" class="form-control input-lg " name="reclave" placeholder="Repita Contraseña" tabindex="6" >
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-3">
                           <label class="btn btn-primary btn-lg btn-block">
                               <input type="checkbox" name="terminos" tabindex="7">
                               Acepto
                           </label> 
                        </div>
                        <div class="col-sm-9">
                              Al Registrarse Usted esta Aceptando los Terminos y Condiciones de uso del Servicio
                        </div>
                      </div>

                <hr>
                      
                     <div class="row">
                        <div class="col-sm-6">
                           <button type="submit" class="btn btn-success btn-lg btn-block" name="registroBtn" tabindex="8">
                             Registrar
                           </button>
                        </div>
                        <div class="col-sm-6">
                              <a href="index.php" class="btn btn-danger btn-lg btn-block" tabindex="9">Cancelar</a>
                        </div>
                      </div>

                      
                 </form>  <!--/ Formulario de Registro -->
            </div>
          </div>
    </div><!--/Contenedor Principal (cuepo de la pagina)-->
