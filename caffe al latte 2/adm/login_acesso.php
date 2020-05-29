<?php
require_once 'db.php';
$u = new Usuario;
    if(isset($_POST['email']));
    {

    
    $email =addslashes($_POST['email']);
    $senha =addslashes($_POST['senha']);
   
        if(!empty($email) && !empty($senha))
        {
            $u->conectar("cafe","localhost","root","massahiko96");
            if($u->msgErro == "")
            {
                if($u->logar($email,$senha))
                {
                    header("location: AreaPrivada.php");
                }
                else
                {
                    echo "Email e/ou senha estão incorretos!";
                }
        }
        else
        {
            echo "Erro: ".$u->msgErro;
        }
        }else
        {
            echo "preencher todos os campos";
        }
    }
?>