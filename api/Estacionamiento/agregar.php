<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/agregarRespuesta.php';
require_once 'modelosRequest/agregarRequest.php';
require_once '../../modelo/Estacionamiento.php';


//se obtiene el body
$json = file_get_contents('php://input',true);
// Convertir el body en un objeto
$req = json_decode($json);

$resp= new AgregarRespuesta();

$e= New Estacionamiento()
$e->Patente=$resp->PatenteVehiculo;
$e->TipoVehiculo=$resp->TipoVehiculo;
$e->Usuario=$resp->UsuarioAlta;

$resp->Estacionamiento=$e;
$resp->ItOk='true';





echo json_encode ($resp);