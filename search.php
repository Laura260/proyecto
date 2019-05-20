<?php

if(isset($_POST["dessert"])){
  include("conexion.php");

  $query = $conexion->prepare("SELECT * FROM postres");
  $query->execute(array());


  foreach ($query as $row) {
     if($row["descripcion"]=='Helado'){
      $_SESSION['helado']=$row['precio'];
    }else if($row["descripcion"]=='Cheescake'){
      $_SESSION['cheescake']=$row['precio'];
    }else if($row["descripcion"]=='Pastel de Manzana'){
         $_SESSION['Pastel de Manzana']=$row['precio'];
    }else if($row["descripcion"]=='Crepa'){
        $_SESSION['crepa']=$row['precio'];
    }else if($row["descripcion"]=='Red Velvet'){
      $_SESSION['red']=$row['precio'];
    }else if($row["descripcion"]=='Tiramisu'){
      $_SESSION['tiramisu']=$row['precio'];
    }else if($row["descripcion"]=='Flan'){
      $_SESSION['flan']=$row['precio'];
    }else if($row["descripcion"]=='Muffin'){
      $_SESSION['muffin']=$row['precio'];
    }else if($row["descripcion"]=='Brownie'){
      $_SESSION['brownie']=$row['precio'];
    }


  }
  
}else{
echo 'error 2';
}




 ?>
