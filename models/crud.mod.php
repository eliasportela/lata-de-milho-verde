<?php  

/**
* Classe para realizar operações basicas no banco de Dados 
*/

class Crud
{
	// Funcao que retorna todos os resultados de uma consulta
	public function Read($sql)
	{
		$comando = new Comando;
		$result = $comando->Executar($sql);

		if ($result){
		
			while ($re = $result->fetch_assoc()) {
				$lista[] = $re;
				
			}
		}

		return $lista;
	}

}

?>