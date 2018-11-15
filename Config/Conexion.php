<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)).DS);
	define('URL', "localhost/escuela/");
	define('RAZON', "UEM SCHOOL");
	
	$conex = new Conexion;
	class Conexion{

		public $DB = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "",
			"db"   => "escuela"
		);
		public $ion;

		public function __construct(){
			$this->ion = new mysqli($this->DB['host'], $this->DB['user'], $this->DB['pass'], $this->DB['db']);
		}

		/*public function consultaSimple($sql){
			$this->conex->query($sql);
		}

		public function consultaRetorno($sql){
			$datos = $this->conex->query($sql);
			return $datos;
		}

		public function consultaMaterias($sql){
			$materias = $this->conex->query($sql);
			return $materias;
		}

		public function consultaEstudiantes($sql){
			$estudiantes = $this->conex->query($sql);
			return $estudiantes;
		}*/
	}
	
?>
