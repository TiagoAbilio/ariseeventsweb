<?php
   
   function conectar(){   	
	
	   $servidor = "127.0.0.1";
	   $usuario = "root";
	   $meubanco = "EeventDB"; 
	   
	   $conectou = mysqli_connect($servidor, $usuario, $meubanco) or die ("Não foi pssível conectar ao banco". mysqli_error());
	   
	   if($conectou){
   		   echo	"Coneão estabelecida com sucesso!";	
		   echo "<br>Base encontrada com sucesso! Nome: ".$meubanco;
	   	   		
   	   }	   
	   return $conectou;
   }
         
?>
