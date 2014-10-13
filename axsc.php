<?php
require ('bd.php');

class compAcx
{
    private $obusur;
    private $obpass;
    private $obaces;
    private $idu;
    public  $msg;




    public function compAcxAct($nmidu,$pswo)
    {
        $bandera = 1;

        if ($bandera == 1) {


            $sql = "select *from usuario where usuario='$nmidu' and password='$pswo'";
            $consulta = mysql_query($sql);
            $cuantos = mysql_num_rows($consulta);

                if ($cuantos == 0) {
                    $msg = "<center><h1>¡Verifica usuario y/o contraseña!</h1></center>";
                    $this->msg = $msg;
                    Print "<meta http-equiv='refresh' content='0;
                        url=index.php?msg=$msg'>";
                } else {
                    $idu = mysql_result($consulta, 0, 'id');
                    $activo = mysql_result($consulta, 0, 'estatus');
                    $nivel = mysql_result($consulta, 0, 'nivel');
                    if ($activo == '0') {
                        $msg = "<center><h1>El usuario no esta activo consulte a su <b>ADMINISTRADOR</b></h1></center>";
                        $this->msg = $msg;
                        Print "<meta http-equiv='refresh' content='0;
                        url=index.php?msg=$msg'>";
                    } else {
                        session_start();
                        $_SESSION['idu']=$idu;
                        $_SESSION['acceso']=1;
                        $_SESSION['nivel']=$nivel;
                        Print "<meta http-equiv='refresh' content='0;
                        url=index2.php'>";
                    }

                }
        }
    }
}
?>