<?php
/**
 *
 */
class Beneficios
{
  //Propiedades
  private $ventas=[];
  private $gastos=[];

  //Funciones que permiten almacenar nuevos valores en los arrays
  public function almacenarVenta($venta){
    if($venta>0){
      $this->ventas[]=$venta;
    }
  }
  public function almacenarGasto($gasto){
    if($gasto>0){
      $this->gastos[]=$gasto;
    }
  }

  //Cáculo de los beneficios
  public function calcularBeneficios(){
    $ventasTot=0;
    foreach ($this->ventas as $key => $value) {
      $ventasTot=$ventasTot+$value;
    }
    $gastosTot=0;
    foreach ($this->gastos as $key => $value) {
      $gastosTot=$gastosTot+$value;
    }
    return $ventasTot-$gastosTot;
  }
}

 ?>
