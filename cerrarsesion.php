<?php
session_start();
session_unset();
session_destroy();
$msg="<b>Sesi&oacute;n Finalizada<b>";
Print "<meta http-equiv='refresh' content='0; url=index.php?msg=$msg'>";
?>



