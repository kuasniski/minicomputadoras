
   
    <div class="row">
            <div class="col-sm-8 col-sm-offset-2 cold-md-6 col-md-offset-3">
                  <h1 class="titulo-de-pagina">Pagina de Login</h1>  

                  <hr> 
                  <!-- Formulario de Login -->
                  <form action="http://localhost/minicomputadoras/?controller=user&action=login" method="POST">
                      
                      <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                 <input type="text" class="form-control input-lg" name="email" placeholder="Usuario o Email" tabindex="1" autofocus>
                            </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                                  <input type="password" class="form-control input-lg" name="password" placeholder="Contraseña" tabindex="2" >
                          </div>
                        </div>
                      </div>


                <hr>
                      
                     <div class="row">
                        <div class="col-sm-6">
                           <button type="submit" class="btn btn-success btn-lg btn-block" name="loginBtn" tabindex="3">
                             Login
                           </button>
                        </div>
                        <div class="col-sm-6">
                              <a href="index.php" class="btn btn-danger btn-lg btn-block" tabindex="4">Cancelar</a>
                        </div>
                      </div>

                      
                 </form>  <!--/ Formulario de Login -->
            </div>
          </div>  
       



   