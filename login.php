<?php


   if(isset($_POST["Enviar"])){
     include("conexion.php");

     $user=htmlentities(addslashes($_POST['nameUser']));
     $pwd=htmlentities(addslashes($_POST['pwd']));

     $query=$conexion->prepare("SELECT * FROM clientes WHERE nombre_usuario= :nameUser AND clave= :pwd");
     $query->bindValue(":nameUser", $user);
     $query->bindValue(":pwd", $pwd);
     $query->execute();


     if($query->rowCount()!=0){

       while($row=$query->fetch()){
        // $_SESSION['']
         $_SESSION['id']=$row['idCliente'];
         $_SESSION['usuario']=$row['nombre_usuario'];
         $_SESSION['clave']=$row['clave'];
         $_SESSION['email']=$row['email'];
         $_SESSION['nameP']=$row['nombre'];
         $_SESSION['apellido']=$row['apellido_paterno'];
         $_SESSION['apellidoM']=$row['apellido_materno'];
         $_SESSION['domicilio']=$row['domicilio'];
         $_SESSION['pago']=$row['metodo_pago'];
       }
          header("Location: main_page.php");

     }else{
       $_SESSION['message']='¡No existe Usuario, verifique sus datos!';
       $_SESSION['message_type']='danger';
       header("Location: index.php");



     }

   }


 ?>
