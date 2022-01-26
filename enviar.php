<?php
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

if(mail('nelimtz1610@gmail.com', $correo, $mensaje)){
    echo "Mensaje enviado exitosamente";
    echo '<script language="javascript">alert("Mensaje enviado exitosamente");</script>';
}else{
    echo "Error";
    echo '<script language="javascript">alert("Error");</script>';
}
?>