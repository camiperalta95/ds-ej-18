<?php

class PedidoCompra {
    public $Fecha;
    public $Proveedor;
    public $FechaEntregaEstimada;
    public $CostoTotal;
    public $PedidoCerrado;
    public $ListLineaCompra = array ();


    public function MostrarDatos(){

        echo 'Pedido de compra <br>';
        echo '-----------------------<br>';

        echo 'Fecha : '.$this->Fecha.'<br>';
        echo 'Id del proveedor:' . $this->Proveedor->Id . '<br>';
        echo 'Descripcion:' . $this->Proveedor->Descripcion . '<br>';
        echo 'Fecha de entrega estimada : '.$this->FechaEntregaEstimada.'<br>';
        echo 'Costo total : '.$this->CostoTotal.'<br>';
        echo 'Pedido cerrado : '.$this->PedidoCerrado.'<br>';
       
        
        echo '---------------------------<br>';
        echo 'Lista linea de compra: <br>';
        echo '<br>';
        
        foreach ($this->ListLineaCompra as $LineaCompra){

          
            echo 'Codigo : '.$LineaCompra->Producto->Codigo.'<br>';
            echo 'Descripcion : '.$LineaCompra->Producto->Descripcion.'<br>';
            echo 'Precio de venta : '.$LineaCompra->Producto->PrecioVenta.'<br>';
            echo 'Cantidad  : '.$LineaCompra->Cantidad.'<br>';
            echo 'Costo Unitario  : '.$LineaCompra->CostoUnitario.'<br>';
            echo 'Fue Entregado  : '.$LineaCompra->FueEntregado.'<br>';
    
            

         }
    }



}