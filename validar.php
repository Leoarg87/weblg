<?php
class conexion{
    private $conexion;
    private $server="localhost";
    private $usuario="root";
    private $pass="liceorc4";
    private $db="proyecto";
    private $user;
    private $password;

    public function __construct(){

        $this->conexion = new mysqli($this->server,$this->usuario,$this->pass,$this->db);
        if($this->conexion->connect_errno){
            die("fallo al tratar de conectar con mysql_(".$this->conexion->connect_errno.")");
        }
    }

    public function cerrar(){

        $this->conexion->close();

    }

    public function login($usuario,$pass){

        $this->user = $usuario;
        $this->password = $pass;

        $query ="SELECT `id`, `user`, `password`,`role` FROM `usuarios` WHERE `user` ='".$this->user."' AND `password`= '".$this->password."'";
        $consulta = $this->conexion->query($query);

        
        if($row= mysqli_fetch_array($consulta)){
            if(password_verify($_POST["password"],$row["password"]));
            session_start();
                $_session['id'] = $row['id'];
                $_session['role'] = $row['role'];
                $_session['user'] = $row['user'];

            echo("bienvenido $usuario ");


        }else{
            echo"usuario o contraseña incorrecto";
        }
    
    }
}
?>

