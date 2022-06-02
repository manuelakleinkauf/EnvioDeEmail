<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="./css/style.css" rel="stylesheet"/>
</head>
<body>
    <form  action="index.php" method="POST">
        <input type="text" name="nome" placeholder="Nome completo" required/>
        <input type="text" name="assunto" placeholder="Assunto da mensagem" required/>
        <input type="text" name="mensagem" placeholder="Mensagem" required/>
        <input id="btn" type="submit" name="enviar" value="Enviar"/>
    </form>
    <?php
        if(isset($_POST ['enviar'])){//informa se foi iniciado
            $de = "Nome: ". $_REQUEST['nome'];
            $subject= "Assunto: ". $_REQUEST['assunto'];
            $message ="Mensagem: ". $_REQUEST['mensagem']."\n".
            $de;
            $to = "kleinkaufmanuela@gmail.com";
           if(mail($to, $subject, $message)) { //mail é a funcao q envia o email
                echo("Email enviado!");
            }else{
                echo("Erro! O email não foi enviado!");
            }

        }
    ?>
</body>
</html>