<?php
require_once '../modelos/Buscador.php';

$buscador = new Buscador();

// Objetos a recibir mediante POST de un formulario HTML
$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$aps=isset($_POST["aps"])? limpiarCadena($_POST["aps"]):"";
$nivel_organizacional=isset($_POST["nivel_organizacional"])? limpiarCadena($_POST["nivel_organizacional"]):"";
$url_proyecto=isset($_POST["url_proyecto"])? limpiarCadena($_POST["url_proyecto"]):"";
$estatus=isset($_POST["estatus"])? limpiarCadena($_POST["estatus"]):"";
$arquitecto=isset($_POST["arquitecto"])? limpiarCadena($_POST["arquitecto"]):"";
$programador=isset($_POST["programador"])? limpiarCadena($_POST["programador"]):"";
$tester=isset($_POST["tester"])? limpiarCadena($_POST["tester"]):"";
$gerente=isset($_POST["gerente"])? limpiarCadena($_POST["gerente"]):"";
$usuario_gerente=isset($_POST["usuario_gerente"])? limpiarCadena($_POST["usuario_gerente"]):"";
$fecha_hora=isset($_POST["fecha_hora"])? limpiarCadena($_POST["fecha_hora"]):"";
$nueva_version=isset($_POST["nueva_version"])? limpiarCadena($_POST["nueva_version"]):"";
$version_anterior=isset($_POST["version_anterior"])? limpiarCadena($_POST["version_anterior"]):"";
$resultado_pruebas=isset($_POST["resultado_pruebas"])? limpiarCadena($_POST["resultado_pruebas"]):"";
$bitacora=isset($_POST["bitacora"])? limpiarCadena($_POST["bitacora"]):"";
$notas_asignacion=isset($_POST["notas_asignacion"])? limpiarCadena($_POST["notas_asignacion"]):"";
$notas_fecha_hora=isset($_POST["notas_fecha_hora"])? limpiarCadena($_POST["notas_fecha_hora"]):"";
$apagar=isset($_POST["apagar"])? limpiarCadena($_POST["apagar"]):"";
$version=isset($_POST["version"])? limpiarCadena($_POST["version"]):"";

// Nuestro JS va a hacer una peticion Ajax a este archivo para devolver valores de acuerdo a la operacion
switch ($_GET["op"]){
    case 'guardaryeditar':
        // Si no hay un ID entonces estamos añadiendo un nuevo registro ... NO AÑADIR, DEJAR EDITAR
        if (empty($id)){
            $respuesta = $buscador->insertar_reg($aps, $nivel_organizacional, $url_proyecto, $estatus, $arquitecto, 
            $programador, $tester, $gerente, $usuario_gerente, $fecha_hora, $nueva_version, $version_anterior,
            $resultado_pruebas, $bitacora, $notas_asignacion, $notas_fecha_hora, $apagar, $version);
            echo $respuesta ? "categoria registrada" : "No se pudo registrar la categoria";
        } else {
            $respuesta = $buscador->editar_reg($id,$aps, $nivel_organizacional, $url_proyecto, $estatus, $arquitecto, 
            $programador, $tester, $gerente, $usuario_gerente, $fecha_hora, $nueva_version, $version_anterior,
            $resultado_pruebas, $bitacora, $notas_asignacion, $notas_fecha_hora, $apagar, $version);
            echo $respuesta ? "categoria actualizada" : "No se pudo actualizar la categoria";
        }
        break;
    case 'desactivar':
        //
        break;
    case 'activar':
        //
        break;
    case 'mostrar':
        $respuesta=$buscador->mostrar($id);
 		//Codificar el resultado utilizando json
 		echo json_encode($respuesta);
 		break;
    case 'listar':
        $respuesta=$buscador->listar();
 		//Vamos a declarar un array
 		$data= Array();

        // Para cada uno de los resultados construimos un renglon de data
        // indice cero tiene dos posibilidades: editar & desactivar ó editar & activar
 		while ($reg=$respuesta->fetch_object()){
 			$data[]=array(
 				"0"=>$reg->id,
 				"1"=>$reg->aps,
 				"2"=>$reg->nivel_organizacional,
                "3"=>$reg->url_proyecto,
                "4"=>$reg->estatus,
                "5"=>$reg->arquitecto,
                "6"=>$reg->programador,
                "7"=>$reg->tester,
                "8"=>$reg->gerente,
                "9"=>$reg->usuario_gerente,
                "10"=>$reg->fecha_hora,
                "11"=>$reg->nueva_version,
                "12"=>$reg->version_anterior,
                "13"=>$reg->resultado_pruebas,
                "14"=>$reg->bitacora,
                "15"=>$reg->notas_asignacion,
                "16"=>$reg->notas_fecha_hora,
                "17"=>$reg->apagar,
                "18"=>$reg->version
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results); // Arreglo utilizado por DataTables
        break;
}

?>