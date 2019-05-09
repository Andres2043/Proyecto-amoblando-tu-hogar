<main>
    <div class="row">
      <div class="col s12">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Registro</b>
            </div>
          </div>

            <div class="" style="padding: 100px">
              <div class="form-group">
                  <label  style="color: #323232">Documento</label>
                  <?php //foreach ($this->modelUsuario->consultar()as $value) { ?>
                  <select>  
                      <option id="documento"><?php  echo $value->Sg_Documento ?></option>
                  </select>
                  <?php  //} ?>
                  <form >
                      <div class="">
                      <label style="color: #323232">Nombres</label>
                      <input style="box-shadow:  none!important; border-bottom-color: #9e9e9e" class="form-control" type="text" placeholder="Primer nombre">
                      <input style="box-shadow:  none!important; border-bottom-color: #9e9e9e" class="form-control" type="text" placeholder="Segundo nombre"> 
                  </div>
                  <br>
                  <div class="">
                      <label  style="color: #323232">Apellidos</label>
                      <input style="box-shadow:  none!important; border-bottom-color: #9e9e9e" class="form-group" type="text" placeholder="Primer apellido">
                      <input style="box-shadow:  none!important; border-bottom-color: #9e9e9e" class="form-group" type="text" placeholder="Segundo apellido">
                  </div>
                  </form>
                       <label  style="color: #323232">Genero</label>
                       <div>
                           <select>
                      <option></option>
                           </select>
                       </div>
                       <label  style="color: #323232">Ciudad</label>
                       <div>
                           <select>
                      <option></option>
                           </select>
                       </div>
                       <form method="post" action="?c=usuario&m=store_user">
                           <div class="">
                      <label  style="color: #323232">Correo</label>
                      <input style="box-shadow:  none!important; border-bottom-color: #9e9e9e" class="form-group" type="text" id="email" name="email">
                       </div>
                       <div class="">
                      <label  style="color: #323232">Contraseña</label>
                      <input style="box-shadow:  none!important; border-bottom-color: #9e9e9e" style=" box-shadow: 1px #fff176!important " class="form-group" type="password" id="password" name="password">
                  </div>
                       
                  <button  style="color: #fff; background-color: #ffb74d!important "class="btn waves-effect waves-light" type="submit" name="action">Registrar
                             <i class="material-icons right">send</i>
                    </button>
                       </form>
              </div>
          </div>
        </div>
      </div>

      
    </div>
</main>

