<?php 

$servidor="localhost";
$banco="pessoa";
$usuario="root";
$senha="usbw";

$conn = new mysqli($servidor,$usuario,$senha,$banco);
// sem utilizar var de memoria
//$conn= new mysqli("localhost","root","usbw","pessoa");


if ($conn ==TRUE)

{
	
}

else 
{
	echo "<script>alert('Falha no login!');</script>";
}

 ?>