<?php

require_once 'modelo/Proveedor.php';
require_once 'modelo/Producto.php';
require_once 'modelo/PedidoCompra.php';
require_once 'modelo/LineaCompra.php';

$p= New Proveedor ();
$p->Id=1;
$p->Descripcion= 'camila';

$pro1= New Producto ();
$pro1->Codigo= '123';
$pro1->Descripcion= 'Masitas';
$pro1->PrecioVenta= '800';

$pro2= New Producto ();
$pro2->Codigo= '545';
$pro2->Descripcion= 'Gaseosa';
$pro2->PrecioVenta= '2500';

$Li1= New LineaCompra ();
$Li1->Cantidad= '2';
$Li1->CostoUnitario= '1500';
$Li1->FueEntragado= 'true';
$Li1->Pedido=$pro1;


$Li2= New LineaCompra ();
$Li2->Cantidad= '3';
$Li2->CostoUnitario= '1200';
$Li2->FueEntregado='true';
$Li2->Pedido=$pro2;


$pdc= New PedidoCompra ();
$pdc->Fecha= '12/8/2024';
$pdc->Proveedor='camila';
$pdc->FechaEntregaEstimada='20/8/2024';
$pdc->CostoTotal= '2000';
$pdc->PedidoCerrado='true';

$pdc->ListLineaCompra[]=$Li1;
$pdc->ListLineaCompra[]=$Li2;

$pdc->MostrarDatos();


