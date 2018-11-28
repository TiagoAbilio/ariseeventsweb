<?php    
  
  $idUser = $_POST["id"];
  $pasword = $_POST["pasword"];
  $nameUser = $_POST["nameUser"];
  $typerUser = $_POST["typerUser"];
  $email = $_POST["email"];
  $filiation = $_POST["filiation"];
  
  // incluir o arquivo PHP com a função de conexão com o Banco de Dados...
  include("conectabanco.php");
	  
  // iniciar a conexão com banco para procurar os valores de id do usuario...	  
  $conexao = conectar();
  $consulta = "select idUser from User";
  $resultado = mysqli_query($conexao,$consulta);
  
  $resultado || die("Erro: Falha na consulta do banco de dados ".mysqli_error($conexao));
  $linhas = mysqli_num_rows($resultado);
  // ira fazer a pesquisa no banco para ver se existe algum id semelhante no banco caso haja nao sera cadastrado	
  while ($linha = mysqli_fetch_assoc($resultado)) {
	  if($linha["idUser"] == $idUser){
		$Cadastrar = 1;
		break;
	}
  }

  if($Cadastrar == 1){
	$string_insert = "INSERT INTO `EeventDB`.`User` (`idUser`, `password`, `nameUser`, `typerUser`, `email`, `filiation`) VALUES 		(?, ?, ?, ?, ?, ?);";

  }else{
	echo "ID de Usuario Ja Cadastrado Digite um novo ID";
   }
    
  if ($stmt = mysqli_prepare($conexao, $string_insert)) {

	  mysqli_stmt_bind_param($stmt,  'isssss',$idUser,$password,$nameUser,$typerUser,$email, $filiation);

	  $success = mysqli_stmt_execute($stmt);

	  mysqli_stmt_close($stmt);	  
	  
	  echo "<br>Dados inseridos no Banco de Dados: 
	      
  } 
?>
