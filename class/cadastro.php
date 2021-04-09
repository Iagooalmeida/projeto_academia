<?php
Class Cadastro
{
	private $pdo;
	public $msgErro = "";

	public function Conectar($nome, $host, $usuario, $senha)
	{
		global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome, $usuario, $senha);
		} 
		catch (PDOException $e) 
		{
			$msgErro = $e->getMessage();
		}
	}

	public function Cadastrar($nome, $telefone, $email, $celular, $periodo, $modalidade, $mensagem)
	{
		global $pdo;
		$sql = $pdo->prepare("SELECT * FROM pre_cadastro WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false; 
		}
		else 
		{
			global $pdo;
			$sql = $pdo->prepare("INSERT INTO pre_cadastro (nome, telefone, celular, email, periodo, modalidade, mensagem) 
									VALUES (:nome, :telefone, :celular, :email, :periodo, :modalidade, :mensagem)");

			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":telefone", $telefone);			
			$sql->bindValue(":celular", $celular);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":periodo", $periodo);
			$sql->bindValue(":modalidade", $modalidade);
			$sql->bindValue(":mensagem", $mensagem);
			$sql->execute();
			return true; 
		}
	}
}
?>