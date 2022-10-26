<?php
    include_once '../../conexionBD/bd.php';

    $ci = $_POST["ci"];
    $nom = $_POST["nom"];
    $ape = $_POST["apePa"];
    $ape2 = $_POST["apeMa"];
    $Rol = $_POST["Rol"];
    $cel = $_POST["cel"];
     $car = $_POST["corr"];
    $usu =$_POST["usu"];
    $cont = $_POST["cont"];
    
    $con=BD::crearInstacia();
    $sql = "SELECT * FROM usuarios WHERE ci = :carnetidentidad or correo=:correo";
    $stmt = $con->prepare($sql);
     $stmt->execute(array(':carnetidentidad'=>$ci,':correo'=>$car));
      
    if ($stmt->rowCount()>0) {
        echo "El carnet de identidad o correo ya existe!!!";
    }
    else
    {
      $response =$con->prepare("insert into usuarios(ci,nombre,apellido_pat,apellido_mat,fk_cargo,celular,correo,usuario,contraseña)values(?,?,?,?,?,?,?,?,?);");
    
      $resultado = $response->execute(array($ci,$nom,$ape,$ape2,$Rol,$cel,$car,$usu,$cont)); 
    
      if(!$resultado)
      {
            echo "Error";
      }
      else
      {
        echo "<center><strong><h4>¡INSERCIÓN EXITOSA!<BR><a href='../../registrodeusuario.php'>CLICK PARA VERIFICAR</a></strong></h4></center>"; 
      }
    }
   
  
 


 
?>

















