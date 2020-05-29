<?php
require_once 'db.php';
$u = new Usuario;
    if(isset($_POST['nome']));
    {

    $nome = addslashes($_POST['nome']);
    $email =addslashes($_POST['email']);
    $confirmar_email = addslashes($_POST['cemail']);
    $senha =addslashes($_POST['senha']);
    $confirmar_senha =addslashes($_POST['csenha']);
        if(!empty($nome)  && !empty($email) && !empty($confirmar_email ) && !empty($senha) && !empty($confirmar_senha))
        {
            $u->conectar("cafe","localhost","root","massahiko96");
            if($u->msgErro == "")
            {   
                if($email==$confirmar_email && $senha==$confirmar_senha)
                {
                    if($u->cadastrar($nome,$email,$senha))
                    {
                        echo "cadastrado com sucesso";
                        // header("location: ../index.php");
                    }
                    else
                    {
                        echo "email ja cadastado";
                    }
                }
               else
               {
                   echo "senha e confirmar senha nao conrrespondem";
               }
            }
            else
            {
                echo "Erro: ".$u->msgErro;
            }
        }else
        {
            echo "Preenchar todos os campos";
        }
    }
    
?>