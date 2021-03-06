<?php
	class Conexion
	{
        // Datos de conexión
        var $host = ""; 
        var $usuario = ""; 
        var $passwd  = "";
        var $base = ""; 

        var $cn = null;

        public function __construct($host="localhost", $usuario="root", $passwd="", $base="web2020")
        {
            $this->host=$host;
            $this->usuario=$usuario;
            $this->passwd=$passwd;
			$this->base=$base;
			$this->cn = $this->conectar();
        }

	    public function conectar()
		{
			$this->cn = new mysqli($this->host,$this->usuario,$this->passwd,$this->base);
			if (mysqli_connect_error())
			{
				return null;
			}
			else
				return $this->cn;

		}

		public function ejecutar($consulta) {
			$res = $this->conectar()->query($consulta);
			while ( $fila = $res->fetch_object() ) {
				$datos[] = $fila;
			}
			return $datos;
		}
	}
	
	// fin	
?>
