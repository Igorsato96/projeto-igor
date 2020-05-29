<?php

 class Usuario
 { 
     private $pdo;
    public $msgErro = ""; //tudo ok

     public function conectar($nome,$host,$usuario,$senha)
     {
        global $pdo;
        global $msgErro;
        try 
        {
        $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
     }catch (PDOException $e) {
        $msgErro = $e-> getMessage();
     }
 
    }

    public function cadastrar($nome,$email,$senha)
{
    global $pdo;
    //Verificar se ja existe o email cadastrado
    $sql = $pdo->prepare("SELECT id FROM cliente WHERE email = :e");
    $sql -> bindValue(":e",$email);
    $sql -> execute();
    if($sql->rowCount() > 0)
    {
        return false; //ja esta cadastrado 
    }
    else
    {
        // caso nao, Cadastrar
        $sql = $pdo->prepare("INSERT INTO cliente(nome,email,senha) 
        VALUES(:n,:e,:s)");
        $sql -> bindValue(":n",$nome);
        $sql -> bindValue(":e",$email);
        $sql -> bindValue(":s",md5($senha));
        $sql -> execute();
        return true;    


    }
}


public function logar($email,$senha)
{
    global $pdo;
    // verificar se o email e senha estao cadastrados, se sim 
    $sql = $pdo->prepare("SELECT id,nome FROM cliente WHERE email = :e AND senha = :s");
    $sql->bindValue(":e",$email);
    $sql->bindValue(":s",md5($senha));
    $sql->execute();
    if($sql->rowCount() > 0)
    {
        //entrar no sistema
        $dado=$sql->fetch();
        session_start();
        $_SESSION['id_usuario'] = $dado['id'];
        $_SESSION['user_name'] = $dado['nome'];
        return true; // logado com sucesso
    }
    else
    {
        return false; // nao foi possivel logar
        }
    }

}

?>