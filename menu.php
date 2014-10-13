<?php
SESSION_START();
$idu2=$_SESSION['idu'];
$acceso2=$_SESSION['acceso'];
$nivel=$_SESSION['nivel'];
if($idu2=="" or $acceso2=="" or $nivel=="")
{
    Print "<meta http-equiv='refresh' content='0;
    url=index.php?msg=$msg'>";
}else{
    if($nivel == '1')
    {
        echo"<div class='masthead'>
            <h3 class='text-muted'><center>Proyecto Integral de Control Escolar</center></h3>
            <ul class='nav nav-justified'>
                <li class='active'><a href='index2.php'>Inicio</a></li>
                <li><a href='TestUsuario.php'>Alumnos</a></li>
                <li><a href='TestMateria.php'>Asignar Materias a Maestros</a></li>
                <li><a href='TestGrupo.php'>Asignar Alumnos a Grupos</a></li>
                <li><a href='#'>Grupos</a></li>
                <li><a href='cerrarsesion.php'>Salir</a></li>
            </ul>
        </div>";
    }
    if($nivel == '2')
    {
        echo"<div class='masthead'>
            <h3 class='text-muted'><center>Proyecto Integral de Control Escolar</center></h3>
            <ul class='nav nav-justified'>
                <li class='active'><a href='index2.php'>Inicio</a></li>
                <li><a href='TestMateria.php'>Asignar Materias a Maestros</a></li>
                <li><a href='cerrarsesion.php'>Salir</a></li>
            </ul>
        </div>";
    }
    if($nivel == '3')
    {
        echo"<div class='masthead'>
            <h3 class='text-muted'><center>Proyecto Integral de Control Escolar</center></h3>
            <ul class='nav nav-justified'>
                <li class='active'><a href='index2.php'>Inicio</a></li>
                <li><a href='cerrarsesion.php'>Salir</a></li>
            </ul>
        </div>";
    }

}
?>