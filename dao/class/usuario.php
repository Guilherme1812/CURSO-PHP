<?php 

class Usuario {
	private $idCliente;
	private $login;
	private $senha;
	private $dataCadastro;

	public function getIdCliente(){
		return $this->idCliente;
	}
	public function setIdCliente($value){
		$this->idCliente = $value;
	}
	public function getLogin(){
		return $this->login;
	}
	public function setLogin($value){
		$this->login = $value;
	}
	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($value){
		$this->senha = $value;
	}
	public function getDataCadastro(){
		return $this->dataCadastro;
	}
	public function setDataCadastro($value){
		$this->dataCadastro = $value;
	}
	public function setData($data){

		$this->setIdCliente($data['idCliente']);
		$this->setLogin($data['login']);
		$this->setSenha($data['senha']);
		$this->setDataCadastro(new DateTime($data['dataCadastro']));
	}
	public function update($login, $senha){
		$this->setLogin($login);
		$this->setSenha($senha);
		$sql = new Sql();
		$sql->query("UPDATE usuarios set login = :LOGIN, senha = :PASSWORD WHERE idCliente = :ID", array(
			":LOGIN"=>$this->getLogin(),
			":PASSWORD"=>$this->getSenha(),
			":ID"=>$this->getIdCliente()
		));
	}
	public function insert(){
		$sql = new Sql();
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			':LOGIN'=>$this->getLogin(),
			':PASSWORD'=>$this->getSenha()
		));
		if (count($results) > 0) {
			$this->setData($results[0]);
		}
	}
	public function delete(){
		$sql = new Sql();
		$sql->query("DELETE FROM usuarios WHERE idCliente = :ID", array(
			":ID"=>$this->getIdCliente()
		));
		$this->setIdCliente(0);
		$this->setLogin("");
		$this->setSenha("");
		$this->setDataCadastro(new DateTime);
	}
	public function loadById($id){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM usuarios WHERE idCliente = :ID", array(
			":ID"=>$id
		));
		if(count($results)>0){
			$this->setData($results[0]);
		} 
	}
	public static function getList(){
		$sql = new Sql();
		return $sql->select("SELECT * FROM usuarios ORDER BY login");
	}
	public function Search($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM usuarios WHERE login LIKE :LOG ORDER BY login", array(
			':LOG'=>"%". $login ."%"));
	}
	public function Login($login, $password){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM usuarios WHERE login = :LOGIN AND senha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));
		if(count($results)>0){
			$this->setData($results[0]);
		} 
		else{
			throw new Exception("Login e / ou senha inválido!");
			
		}
	}
	public function __toString(){
		return json_encode(array(
			"idCliente"=>$this->getIdCliente(),
			"login"=>$this->getLogin(),
			"senha"=>$this->getSenha(),
			"dataCadastro"=>$this->getDataCadastro()->format("d/m/Y H:i:s")
		));
	}
}


 ?>