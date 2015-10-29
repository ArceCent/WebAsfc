<?php
class ClsConexion {
/*Variables*/
	private $server;
	private $database;
	private $user;
	private $password;

    private $cad_conex;
	private $conexion;
    
    public function _construct($t_server,$t_database,$t_user,$t_password)
    {
        $this->server = $t_server;
        $this->database = $t_database;
        $this->user = $t_user;
        $this->password = $t_password;
    }
    
    public function getCadenaConexion()
    {
        return $this->server . ' ' . $this->database;
    }
    public function ClsConexion($database = false, $user = false, $password = false, $server = false){
			if ($database){
				$this -> database = $database;
				
			}else{
				$this -> database = 'ASFC_WEB';//				
			}

			if ($user){
				$this -> user = $user;
				 
			}else{
				$this -> user = 'user_web';//				
			}
			
			if ($password){
				$this -> password = $password;
				 
			}else{				
				$this -> password = 'Usr.234';//			
			}
				
			if ($server){
				$this -> server = $server; 
			}else{
				$this -> server = '192.168.2.9\SQL2012';//
			}							
		}
    /*
    function SetServer()
   {
     $this->server = "192.168.2.9\SQL2012";
   }
   function SetDataBase()
   {
    $this->database="ASFC_WEB";
   }
   function SetUser()
   {
    $this->user="user_web";
   }
   function SetPassword()
   {
    $this->user="Usr.234";
   }
   function SetCad_Conex()
   {
    $this->cad_conex="Driver={SQL Server Native Client 11.0};"."Server=".$this->server.";"."DatabaseName=".$this->database.";";
   }
*/
public static function cadena_conexion()
{
    
    //return $this->server;
    echo $this->$server;
}
public static function Conectar2()
{
	$conexion  = odbc_connect($cad_conex, $user, $password);
	if(!$conexion )
	{
		$mensaje = "Fallo la Conexion a la Base de Datos";
	}
	else
	{
		$mensaje = "Conectado Correctamente a la Base de Datos";
	}
	return $mensaje;
}

public function Conectar()
 {
   /* $dsn = "Driver={SQL Server Native Client 11.0};Server=$server;Database=$database;";*/
    $this->conexion = odbc_connect( $this->cad_conex, $this->user, $this->password ) or die( odbc_errormsg() );
     echo 'Conexión Establecida';
 }

/*
$sql="SELECT FECHA_INICIO,DESCRIPCION_LARGA FROM CAT_CICLO_ESCOLAR";
$rs=odbc_exec($conn,$sql);
if (!$rs)
{
	exit("Error al ejecutar la Consulta");
}
echo "<table><tr>";
echo "<th>FECHA INICIO</th>";
echo "<th>DESCRIPCION LARGA</th>";
while (odbc_fetch_row($rs))
{
	$fecha_ini=odbc_result($rs,"FECHA_INICIO");
	$desc=odbc_result($rs,"DESCRIPCION_LARGA");
	echo "<tr><td>$fecha_ini</td>";
	echo "<td>$desc</td></tr>";
}
echo "</table>";
odbc_close($conn);
*/
}
class base
{
    public static function create($t_server,$t_database,$t_user,$t_password)
    {
        return new ClsConexion($t_database,$t_user,$t_password,$t_server);
        //'ASFC_WEB','user_web','Usr.234','192.168.2.9\SQL2012'
    }
    
}
?>
