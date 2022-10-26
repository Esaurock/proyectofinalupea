<?php 
require ("config.php");
include("template/cabecera.php");

$id=$_GET['id'];

$sql = "SELECT * FROM usuario WHERE id_usuario = '$id' ";

$query = mysqli_query($link,$sql);

$row = mysqli_fetch_array($query);

?>

<div class="container mt-n1">
  <div class="row">
    <div class="col-md-4 "></div>
    
    <div class="col-md-6">
      <h4>Editar Usuario</h4>
      <form action="actualizar.php" method="POST">

      <input type="hidden" name="id_usuario" value="<?php echo $row['0'] ?>">

      <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre completo" value="<?php echo $row['2'] ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="30">
      <input type="number" class="form-control mb-3" name="ci" placeholder="Cedula de identidad" value="<?php echo $row['3'] ?>" maxlength="15" min="1" max="999999999999999">      
      <input type="number" class="form-control mb-3" name="cel" placeholder="Celular" value="<?php echo $row['4'] ?>" maxlength="15" min="1" max="999999999999999">      
      <input type="text" class="form-control mb-3" name="dir" placeholder="Direccion" value="<?php echo $row['5'] ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="80">
      <input type="text" class="form-control mb-3" name="usu" placeholder="usuario" value="<?php echo $row['6'] ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="80">
      <input type="text" class="form-control mb-3" name="contra" placeholder="contraseña" value="<?php echo $row['7'] ?>" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="80">
            
        
               <div class="form-group">
               <select class="form-control" name="rol" required="" >

                    <?php
                    $sql1 = $link -> query("SELECT * FROM rol WHERE 1");

                    while ($valores = mysqli_fetch_array($sql1))
                    {

                    if ($row['1']==$valores['id_rol']) {
                    echo "<option value ='".$valores['id_rol']."' selected>".$valores['cargo']."</option>";  
                    }
                    if ($row['1']!=$valores['id_rol']) {
                    echo "<option value ='".$valores['id_rol']."'>".$valores['cargo']."</option>";
                    }

                    }


                    ?>
                    </select>
               </div>
            
              

        <input type="submit" name="enviar" class="btn btn-success" value="Actualizar">
        <a href="registrar.php" class="btn btn-danger" >Regresar</a>
      </form>

    </div>  
  </div>
</div>

<?php
include("template/cabecera.php"); ?>