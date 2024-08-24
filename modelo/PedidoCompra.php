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

        echo 'Fecha:' . $this->Fecha . '<br>';
        echo 'Proveedor:' . $this->Proveedor . '<br>';
        echo 'Fecha de entrega estimada:' . $this->FechaEntregaEstimada . '<br>';
        echo 'Costo total:' . $this->CostoTotal . '<br>';
        echo 'Pedido cerrado:' . $this->PedidoCerrado . '<br>';

        echo '------------------------<br>';
        echo 'Proveedor: <br>';
        echo '------------------------<br>';
        echo 'Id:' . $this->Proveedor->Id . '<br>';
        echo 'Descripcion:' . $this->Proveedor->Descripcion . '<br>';

        echo '---------------------------<br>';
        echo 'Lista linea de compra: <br>';
        echo '<br>';
        
        foreach ($this->ListLineaCompra as $Lista){

            echo '<br>';
            echo 'Producto:' . $Lista->Producto . '<br>';
            echo 'Cantidad:' . $Lista->Cantidad . '<br>';
            echo 'Costo:' . $Lista->Costo . '<br>';
            echo 'Entregado:' . $Lista->FueEntregado . '<br>';
            
            echo '<br>';
            echo '-----------------------<br>';
            echo 'Producto: <br>';
            echo 'Descripcion:' . $this->Producto->Descripcion . '<br>';
            echo 'Precio de venta:' . $this->Producto->PrecioVenta . '<br>';

        }
    }



}