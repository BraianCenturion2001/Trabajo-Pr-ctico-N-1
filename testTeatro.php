<?php

include 'Teatro.php';

echo "Ingrese el nombre del Teatro: ";
$nombre = trim(fgets(STDIN));
echo "Ingrese la dirección del Teatro: ";
$direccion =  trim(fgets(STDIN));
echo "Ingrese el nombre de la PRIMERA función: ";
$nombf1 = trim(fgets(STDIN));
echo "Ingrese el precio de la PRIMERA función: ";
$preciof1 = trim(fgets(STDIN));
echo "Ingrese el nombre de la SEGUNDA función: ";
$nombf2 = trim(fgets(STDIN));
echo "Ingrese el precio de la SEGUNDA función: ";
$preciof2 = trim(fgets(STDIN));
echo "Ingrese el nombre de la TERCERA función: ";
$nombf3 = trim(fgets(STDIN));
echo "Ingrese el precio de la TERCERA función: ";
$preciof3 = trim(fgets(STDIN));
echo "Ingrese el nombre de la CUARTA función: ";
$nombf4 = trim(fgets(STDIN));
echo "Ingrese el precio de la CUARTA función: ";
$preciof4 = trim(fgets(STDIN));

$teatro = new Teatro($nombre, $direccion, $nombf1, $nombf2, $nombf3, $nombf4, $preciof1, $preciof2, $preciof3, $preciof4);

$respuesta = "SI";
while ($respuesta=="SI"){
    echo "MENÚ DE OPCIONES \n";
    echo "1. VER/MODIFCAR DATOS SOBRE EL TEATRO\n";
    echo "2. VER/MODIFICAR DATOS SOBRE LAS FUNCIONES\n";
    $resp1 = trim(fgets(STDIN));
    if ($resp1 == 1){
        echo "QUE ACCIÓN DESEA REALIZAR?\n";
        echo "1. MODIFICAR\n";
        echo "2. VER DATOS\n";
        $resp2 = trim(fgets(STDIN));
        if ($resp2 == 1){
            echo "QUE DESEA MODIFICAR SOBRE EL TEATRO?\n";
            echo "1. EL NOMBRE DEL TEATRO\n";
            echo "2. LA DIRECCÓN DEL TEATRO\n";
            $resp3 = trim(fgets(STDIN));
            if ($resp3 == 1){
                echo "Ingrese el nuevo nombre del Teatro: ";
                $nuevonombre = trim(fgets(STDIN));
                $teatro->cambiarNombre($nuevonombre);
            }elseif($resp3 == 2){
                echo "Ingrese la nueva dirección del Teatro: ";
                $nuevadireccion = trim(fgets(STDIN));
                $teatro->cambiarDireccion($nuevadireccion);
            } else {
                echo "OPCIÓN INCORRECTA \n";
            }
        } elseif ($resp2 == 2){
            echo "QUE DATOS DESEA VER SOBRE EL TEATRO?\n";
            echo "1. EL NOMBRE DEL TEATRO\n";
            echo "2. LA DIRECCÓN DEL TEATRO\n";
            $resp4 = trim(fgets(STDIN));
            if ($resp4 == 1){
                echo $teatro->cargarNombre()."\n";
            } elseif ($resp4 == 2){
                echo $teatro->cargarDireccion()."\n";
            } else {
                echo "OPCIÓN INCORRECTA \n";
            }
        }

    } elseif ($resp1 == 2){
        echo "QUE ACCIÓN DESEA REALIZAR?\n";
        echo "1. MODIFICAR\n";
        echo "2. VER DATOS\n";
        $resp5 = trim(fgets(STDIN));
        if ($resp5 == 1){
            echo "QUE DESEA MODIFICAR?\n";
            echo "1. NOMBRE\n";
            echo "2. PRECIO\n";
            $resp6 = trim(fgets(STDIN));
            if ($resp6 == 1){
                echo "Ingrese el número de la Función (1 - 2 - 3 - 4): ";
                $idfuncion = trim(fgets(STDIN));
                echo "Ingrese el nuevo nombre de la Función: ";
                $nuevonombref = trim(fgets(STDIN));
                $teatro->cambiarNombreFuncion($idfuncion, $nuevonombref);
            } elseif ($resp6 == 2){
                echo "Ingrese el número de la Función (1 - 2 - 3 - 4): ";
                $idfuncion = trim(fgets(STDIN));
                echo "Ingrese el nuevo precio de la Función: ";
                $nuevoprecio = trim(fgets(STDIN));
                $teatro->cambiarPrecioFuncion($idfuncion, $nuevoprecio);
            } else {
                echo "OPCIÓN INCORRECTA \n";
            }
        } elseif ($resp5 == 2){
            echo "QUE DATO DESEA VER?\n";
            echo "1. NOMBRE\n";
            echo "2. PRECIO\n";
            $resp7 = trim(fgets(STDIN));
            if ($resp7 == 1){
                echo "Ingrese el número de la Función (1 - 2 - 3 - 4): ";
                $idfuncion = trim(fgets(STDIN));
                echo $teatro->verNombreFuncion($idfuncion);
            } elseif ($resp7 == 2){
                echo "Ingrese el número de la Función (1 - 2 - 3 - 4): ";
                $idfuncion = trim(fgets(STDIN));
                echo $teatro->verPrecioFuncion($idfuncion);
            } else {
                echo "OPCIÓN INCORRECTA \n";
            }
        } else{
            echo "OPCIÓN INCORRECTA \n";
        }
    } else {
        echo "OPCIÓN INCORRECTA \n";
    }
    echo "DESEA CONTINUAR? (SI/NO): ";
    $respuesta = trim(fgets(STDIN));
}
?>