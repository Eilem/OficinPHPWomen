<?php

namespace Catalogo;

use PDO;

class ConnectDB extends PDO{

  private $ConnDriver;
	private $ConnUser;
	private $ConnHost;
	private $ConnPass;
	private $ConnDb;
  private $conn;

	function __construct(){
		$this->ConnDriver = "mysql";
		$this->ConnHost   = "localhost";
		$this->ConnUser   = "root";
		$this->ConnPass   = "labfiap#2019$";
		$this->ConnDb     = "catalogo";
	}

  /**
  * função de conexao
  */
  function connect(){
  		$conn = NULL;
  		try{
  			$conn = new PDO($this->ConnDriver.":host=".$this->ConnHost.";
                        dbname=".$this->ConnDb,
                        $this->ConnUser,
                        $this->ConnPass);

  		}catch (PDOException $e){
  			$e->getMessage();
  			echo "Atenção! Ocorreu um erro ao tentar se conectar ao banco de dados.<br />";
        var_dump($exc);
        die();
  		}
  		 $this->conn = $conn;
  	}



    function salvar($categoria){

      $stmt = $this->conn->prepare('INSERT INTO categorias VALUES(:nome)');
      $stmt->execute(array(
        ':nome' => $categoria->nome ,
      ));

    }

}

//testando
//$conn =  new ConnectDB();
//$conn->connect();
