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
                <form method="post" action="?c=usuario&m=Guardar_Usuario">
                  <label  style="color: #323232">Documento</label>
                  <select name="Documento" >  
                      <option>Seleccione...</option>
                      
                  <?php foreach ($this->Documento->consultar()as $value) { ?>
                      
                      <option style="color: #3e2723!important" value="<?php echo $value->Id_Documento ?>"><?php  echo $value->Sg_Documento ?></option>
                  
                  <?php  } ?>
                  </select>
                  
                      <div class="">
                      <label style="color: #323232">Nombres</label>
                      <input name="prim_nom" required="" style="box-shadow:  none!important; border-bottom-color: #9e9e9e" class="form-control" type="text" placeholder="Primer nombre">
                      <input name="seg_nom" required="" style="box-shadow:  none!important; border-bottom-color: #9e9e9e" class="form-control" type="text" placeholder="Segundo nombre"> 
                  </div>
                  <br>
                  <div class="">
                      <label  style="color: #323232">Apellidos</label>
                      <input name="prim_ap" required="" style="box-shadow:  none!important; border-bottom-color: #9e9e9e" class="form-group" type="text" placeholder="Primer apellido">
                      <input name="seg_ap" required="" style="box-shadow:  none!important; border-bottom-color: #9e9e9e" class="form-group" type="text" placeholder="Segundo apellido">
                  </div>
                  
                       <label  style="color: #323232">Genero</label>
                       <div>
                           <select name="genero" >
                               <option>Seleccione...</option>
                               <?php foreach ($this->Genero->consultar() as $value) {?>
                            
                               <option required="" value="<?php  echo $value->Id_Genero ?>"><?php echo $value->Genero ?></option>
                           
                               <?php  } ?>
                            </select>
                       </div>
                       <label  style="color: #323232">Ciudad</label>
                       <div>
                           <select name="ciudad" required="">
                               <option selected="">Seleccione...</option>
                               <?php foreach ($this->Ciudad->consultar() as $value) { ?>
                               
                               <option value="<?php  echo $value->Id_Ciudad ?>"><?php echo $value->Nom_Ciudad ?></option>
                               <?php } ?>
                           </select>
                       </div>
                      
                           <div class="">
                      <label  style="color: #323232">Correo</label>
                      <input required="" name="email" style="box-shadow:  none!important; border-bottom-color: #9e9e9e" class="form-group" type="text" id="email" >
                       </div>
                       <div class="">
                      <label  style="color: #323232">Contraseña</label>
                      <input required="" name="password" style="box-shadow:  none!important; border-bottom-color: #9e9e9e" style=" box-shadow: 1px #fff176!important " class="form-group" type="password" id="password">
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

