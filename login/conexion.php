<?php
	class conexion
	{
		public function conectar()
		{
			$server="localhost";
			$conexion=array("Database"=>"col_leonard_euler",
							"UID"=>"sa",
							"PWD"=>"123456",
							"CharacterSet"=>"UTF-8");
			$con=sqlsrv_connect($server,$conexion);
			if ($con) 
			{
                echo "conexion exitosa";
				return $con;
			}
			else
			{
				echo "Fallo en la conexion...";
				die( print_r( sqlsrv_errors(), true));
			}			
		}
		public function desconectar()
		{
			$con=null;
			return $con;
		}
	}
?>