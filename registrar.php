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
        <!-- Button trigger modal -->
        <div class="form-group">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Registar Cliente
          </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro De Clientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="insertarCliente.php" method="POST">

                  <input type="text" class="form-control mb-3" name="paterno" placeholder="Apellido paterno" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="15">
                  <input type="text" class="form-control mb-3" name="materno" placeholder="Apellido materno" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="15">
                  <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="30">
                  <input type="number" class="form-control mb-3" name="ci" placeholder="Carnet de Identidad" maxlength="15" min="1" max="999999999999999">
                  <input type="tel" class="form-control mb-3" name="cel" placeholder="Numero de Celular" maxlength="15" min="1" max="999999999999999">
                  

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guarda cliente</button>
                  </div>
                  
                  <!--<input type="submit" name="enviar" class="btn btn-primary">-->
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <!-- fin ventana modal -->
        
        
        <div class="table-responsive">
         <table class="table" id="table_id">
          <thead class="table-primary">
            <tr>
              <th>Nombre completo</th>
              <th>Carnet</th>
              <th>Celular</th>
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
                
                <td style="text-align: center">
                  <a href="editarCliente.php?id=<?php echo $row['idcliente']?>" class="btn btn-info"><i class="fas fa-edit"></i></a>

                  <a href="eliminarCliente.php?id=<?php echo $row['idcliente']?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

