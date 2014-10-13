<?php
require ('Grupo.php');
require('header.php');
require ('bd.php');

$Grupo = new Grupo();
$Grupo->AsignarAlumnoaGrupo();
echo "<div><p>";
$alumno = new Alumno();
$grupo = new Grupo();

if (isset($_GET['accion'])){
    switch($_GET['accion']){
        case 1:
            echo "<div class=\"alert alert-info\" role=alert>
Alumno asignado exit&oacute;samente.
</div>";
            break;
        case 2:
            $grupo->desasignarAlumnoGrupo($_GET['alumno_id']);
            echo "<div class=\"alert alert-danger\" role=alert>
Alumno desasignado exit&oacute;samente.
</div>";
            break;
    }
}

echo "<table class=\"table table-striped\">";
echo "<form action=asignar-grupo.php method=POST>";
$alumno->readAlumno();
$grupo->readGrupo();
echo "<tr><td align=center><input type=submit name=opcion value=Agregar></td></tr>";
echo "</form>";
echo "</table>";

require ('footer.php');
?>

?>