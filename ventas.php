<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculo de los Beneficios</title>
  </head>
  <body>
    <?php
    include "beneficios.php";

    //nuevo objeto
    $ben=new Beneficios();
    $ben->almacenarVenta(50);
    $ben->almacenarGasto(45);
    $ben->almacenarVenta(125.6);
    $ben->almacenarGasto(115.2);

    //Calcular beneficios totales
    $beneficiosTotales=$ben->calcularBeneficios();
    echo "Los beneficios son: ".$beneficiosTotales;
     ?>
  </body>
</html>
