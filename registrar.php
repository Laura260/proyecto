<?php

  include("conexion.php");

  if(isset($_POST['registro'])){

    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $name =$_POST['name'];
    $lastname1=$_POST['lastname1'];
    $lastname2=$_POST['lastname2'];
    $address=$_POST['address'];
    $pay=$_POST['pay'];


    $query=$conexion->prepare("INSERT INTO clientes(nombre_usuario, clave, email, nombre, apellido_paterno, apellido_materno, domicilio, metodo_pago) VALUES(:user_name, :password, :email, :name, :lastname1, :lastname2, :address, :pay)");
    $query->bindParam(':user_name', $user_name);
    $query->bindParam(':password', $password);
    $query->bindParam(':email', $email);
    $query->bindParam(':name', $name);
    $query->bindParam(':lastname1', $lastname1);
    $query->bindParam(':lastname2', $lastname2);
    $query->bindParam(':address', $address);
    $query->bindParam(':pay', $pay);
    $query->execute();

    if(!$query){
      $_SESSION['message']='¡Fallo al registrar!';
      $_SESSION['message_type']='danger';

    }else{

      $_SESSION['message']='¡Registro guardado con éxito!';
      $_SESSION['message_type']='succes';


    }

     header("Location: Register.php");


}

 ?>
