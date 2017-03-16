<?php  

// Classse para conectar ao banco de dados

class Conexao
{
	var $bd = "ccb";
	var $user = "root";
	var $senha = "";
	var $host = "localhost";
	var $mysqli;

	// funcao de conexao

	public function Conectar()
	{
		$this->mysqli = new mysqli($this->host,$this->user,$this->senha,$this->bd);
		$this->mysqli->set_charset("utf8");
	}

	// Fechar sessao mysqli

	public function Desconectar()
	{
		$this->mysqli->close();
	}
}

/**
* Classe para realizar operações no banco de dados
*/
class Comando
{
	
	public function Executar($sql)

	{
		$con = new Conexao;
		$con->Conectar();
		$re = $con->mysqli->query($sql);
		$con->Desconectar();
		return $re;
	}
}

/*
	Como utilizar 
	$result = Comando::Executar("SELECT * FROM usuarios");

	while ($re = $result->fetch_assoc()){
	 $usuarios[] = $re;
	}
*/
	
?>