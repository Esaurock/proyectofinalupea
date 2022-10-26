<?php 
include('config.php');
include("template/cabecera.php");
//include('administrar.php'); 

  ?>
 <!-- Navbar -->
 <div class="navbar-wrapper">
   <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a  href="logout.php" class="nav-link text-primary">
           <h6 style="text-align: center;">Cerrar Sesi&oacute;n</h6> 
         </a>
       </li>
     </ul>
     <!-- Right navbar links -->
   </nav>
 </div>
 <!-- /.navbar -->   

<br>

  <div class="container mt-n1">
    <div class="row">

      <div class="col col-md-2"></div>
      <div class="col col-md-10">       
        <!-- Inicio venta modal -->
        <h4><center><i>Registro de usuarios</i></center></h4>
        <hr>
      
              

                <form action="insertarUsuario.php" method="POST">

                  <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre completo" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="30">
                  <input type="number" class="form-control mb-3" name="ci" placeholder="Cedula de identidad" maxlength="15" min="1" max="999999999999999">
                  <input type="number" class="form-control mb-3" name="cel" placeholder="Celular" maxlength="15" min="1" max="999999999999999">
                  <input type="text" class="form-control mb-3" name="dir" placeholder="Direccion" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="80">
                  <input type="text" class="form-control mb-3" name="usu" placeholder="usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="80">
                  <input type="text" class="form-control mb-3" name="contra" placeholder="contraseña" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="80">

                  <div class="form-group">
                   <select class="form-control" name="rol" required="">
                    <option value="" > Seleccione:</option>
                    <?php
                    require ("config.php"); 
                    $sql = $link -> query("SELECT * FROM rol WHERE 1");
                    while ($valores = mysqli_fetch_array($sql))
                    {
                      echo "<option value ='".$valores['id_rol']."'>".$valores['cargo']."</option>";
                    }
                    ?>
                  </select>
                </div>
                  

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guarda cliente</button>
                  </div>
                  
                  <!--<input type="submit" name="enviar" class="btn btn-primary">-->
                </form>
            
     
        
        <div class="table-responsive">
         <table class="table" id="table_id">
          <thead class="table-primary">
            <tr>
              <th>Nombre completo</th>
              <th>Carnet</th>
              <th>Celular</th>
              <th>Direccion</th>
              <th>Usuario</th>
              <th>Contraseña</th>
              <th style="text-align: center">Acciones</th>
              
            </tr>
          </thead>  
          <tbody>
            <?php 
            require("config.php");
            $sql="select * from usuario";  
            $query = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($query)) {
              ?>
              <tr>

                <td><?php echo $row['nombre_completo'] ?></td>
                <td><?php echo $row['ci'] ?></td>
                <td><?php echo $row['celular'] ?></td>
                <td><?php echo $row['direccion'] ?></td>
                <td><?php echo $row['usuario'] ?></td>
                <td><?php echo $row['contra'] ?></td>
                
                <td style="text-align: center">
                  <a href="editarUsuario.php?id=<?php echo $row['id_usuario']?>" class="btn btn-info"><i class="fas fa-edit"></i></a>

                  <a href="eliminarUsuario.php?id=<?php echo $row['id_usuario']?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
              </tr>    

              <?php 
            }
            ?>
            
          </tbody>
          
        </table>
      </div>
      
    </div>

  </div>  
  <!-- div row--->
</div>

<?php
include("template/cabecera.php"); ?>