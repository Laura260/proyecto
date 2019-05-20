<?php

      session_start();

      try {

        $conexion=new PDO('mysql:host=localhost; dbname=proyecto_comida','root','123456789');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET UTF8");

      } catch (\Exception $e) {

        die('Error '.$e->GetMessage());

      }

 ?>
