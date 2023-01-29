<?php 
// Incluimos conexión a la BD
require '../config/conexion.php';

Class Buscador{
    // Implementamos constructor vacio
    public function __construct(){

    }

    // Metodo para insertar registros ... NO SE VA A USAR LA INSERSION
    // ADECUAR NOMBRE DE TABLA
    public function insertar_reg($aps, $nivel_organizacional, $url_proyecto, $estatus, $arquitecto, $programador, $tester, $gerente, $usuario_gerente, $fecha_hora, $nueva_version, $version_anterior, $resultado_pruebas, $bitacora, $notas_asignacion, $notas_fecha_hora, $apagar, $version){
        $sql = "INSERT INTO temp (nombre,descripcion,condicion)
        VALUES ('$aps','$nivel_organizacional','$url_proyecto','$estatus','$arquitecto','$programador',
        '$tester','$gerente','$usuario_gerente','$fecha_hora','$nueva_version','$version_anterior',
        '$resultado_pruebas','$bitacora','$notas_asignacion','$notas_fecha_hora','$apagar','$version')";
        return ejecutarConsulta($sql);
    }

    //Implementamos un método para editar registros
	public function editar_reg($id,$aps, $nivel_organizacional, $url_proyecto, $estatus, $arquitecto, 
    $programador, $tester, $gerente, $usuario_gerente, $fecha_hora, $nueva_version, $version_anterior,
    $resultado_pruebas, $bitacora, $notas_asignacion, $notas_fecha_hora, $apagar, $version){
		$sql = "UPDATE temp SET aps='$aps',
                                nivel_organizacional='$nivel_organizacional',
                                url_proyecto='$url_proyecto',
                                estatus='$estatus'.
                                arquitecto='$arquitecto',
                                programador='$programador',
                                tester='$tester',
                                gerente='$gerente',
                                usuario_gerente='$usuario_gerente',
                                fecha_hora='$fecha_hora',
                                nueva_version='$nueva_version',
                                version_anterior='$version_anterior',
                                resultado_pruebas='$resultado_pruebas',
                                bitacora='$bitacora',
                                notas_asignacion='$notas_asignacion',
                                notas_fecha_hora='$notas_fecha_hora',
                                apagar='$apagar',
                                version='$version' WHERE id='$id'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id){
		$sql="SELECT * FROM temp WHERE id='$id'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar(){
		$sql="SELECT * FROM temp";
		return ejecutarConsulta($sql);		
	}
}
?>