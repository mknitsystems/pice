<?php
class User {
    private $IdPersona;
    private $Nombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Telefono;
    private $Calle;
    private $NumeroExterior;
    private $NumeroInterior;
    private $Colonia;
    private $Municipio;
    private $Estado;
    private $CP;
    private $Correo;
    private $Usuario;
    private $Contrasena;
    private $Nivel;
    private $Estatus;
public function InsertarDatos($Nombre,$ApellidoPaterno,$ApellidoMaterno,$Nivel,$Estatus)
        {
        $insert01 = "INSERT INTO usuario(nombre,ApellidoPaterno,ApellidoMaterno,Nivel,Estatus) VALUES ('$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Nivel','$Estatus')";
        $execute = mysql_query($insert01) or die ("Error al insertar");
        }


public function ConsultarDatos()
        {
        $sql01="SELECT * FROM usuario WHERE estatus = 1 ORDER BY id ASC";
        $consulta = mysql_query($sql01) or die ("error consulta general");
        echo "<div class=table-resposive align=center>";
        echo "<table class=\*table table-striped\ border=1>";
        echo "<tr><td colspan=5 align=center>Resultados</td></tr>";
        echo"<tr><td>Numero</td><td>Nombre(s)</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Nivel</td>";
            while($field = mysql_fetch_array($consulta)){
                $this->IdPersona = $field['id'];
                $this->Nombre = $field['nombre'];
                $this->ApellidoPaterno = $field['ApellidoPaterno'];
                $this->ApellidoMaterno = $field['ApellidoMaterno'];
                $this->Nivel = $field['nivel'];
                    switch($this->Nivel){
                    case 1:
                            $type = "Administrador";
                        break;
                    case 2:
                            $type = "Maestro";
                        break;
                    case 3:
                            $type = "Alumno";
                        break;
                    }
            echo "<tr><td>$this->IdPersona</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$type</td></tr>";
            }
        echo "</table>";
    echo "</div>";
    }
public function ConsultaEspecific($nombre)
    {
    echo "<br><br><br>";
    $sql01="SELECT * FROM usuario WHERE estatus = 1 AND nombre = '$nombre' ORDER BY ApellidoPaterno ASC";
    $consulta = mysql_query($sql01) or die ("consulta especifica");
    echo "<div class=table-resposive align=center>";
        echo "<table class=\*table table-striped\ border=1>";
            echo "<tr><td colspan=5 align=center>Resultados</td></tr>";
            echo"<tr><td>Numero</td><td>Nonbre de persona</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Nivel</td>";
                while($field = mysql_fetch_array($consulta)){
                    $this->IdPersona = $field['id'];
                    $this->Nombre = $field['nombre'];
                    $this->ApellidoPaterno = $field['ApellidoPaterno'];
                    $this->ApellidoMaterno = $field['ApellidoMaterno'];
                    $this->Nivel = $field['nivel'];
                        switch($this->Nivel){
                            case 1:
                                    $type = "Administrador";
                                break;
                            case 2:
                                    $type = "Maestro";
                                break;
                            case 3:
                                    $type = "Alumno";
                                break;
                        }
                echo "<tr><td>$this->IdPersona</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->ApellidoMaterno</td><td>$type</td></tr>";
                }
        echo "</table>";
    echo "</div>";
    }
public function UpdateDatos($nombre,$apellidoPaterno,$apellidoMaterno,$nivel,$estatus,$id)
    {
    $update = "UPDATE usuario SET nombre = '$nombre', ApellidoPaterno = '$apellidoPaterno' , ApellidoMaterno='$apellidoMaterno' , Nivel = $nivel , Estatus = $estatus WHERE Id = $id";
    $execute = mysql_query($update) or die ("Error al modificar");
    echo "Modifico el registro $id";
    }
public function DeleteReg($id)
    {
    $update01 = "UPDATE usuario SET Estatus = '0' WHERE estatus = '1' AND nombre = '$nombre'";
    $execute = mysql_query($update01) or die ("Error al eliminar");
    }
}
?>