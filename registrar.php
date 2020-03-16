<meta charset="utf8">
<?php 
header("content-type: text/html, charset=utf8");

//método foi post então estamos utilizando $_POST[]

//armazenando os conteúdos da variável $_POST nas respectivas
//variáveis locais
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$confirma = $_POST['confirma'];

//vamos utilizar a conexão que está na aula 9 
include ("conectarsqli.php");

//criar a string para gravação
$sql = "INSERT INTO registros (nome,sobrenome,login,senha, salario,senhaconfirma) VALUES ('$nome','$sobrenome','$login','$senha','$confirma')";


	

//executando o comando que está no sql
	$resultado = mysqli_query ($conn, $sql);
	mysqli_close();	
	
	if ($resultado==true && $senha == $confirma) {
		echo "<script>
				alert ('Registro efetuado com sucesso!');
				window.location.href='index.html';
			  </script>";
			  }
		
	else {
		echo "<script>
				alert ('Erro no registro');
				window.location.href='index.html';

			</script>";
	}

	
 
 ?>