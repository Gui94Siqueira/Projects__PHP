<?php
   
        session_start();
    //validando formulario.

    if(isset($_POST['acao'])){
            //recupero valor do input.
            $tarefa = strip_tags($_POST['tarefa']);

            //verificar se existe seção tarefas.
            if(!isset($_SESSION{'tarefas'})){
                $_SESSION['tarefas'] = array();
                $_SESSION{'tarefas'}[] = $tarefa;
            }else{
                $_SESSION['tarefa'][] = $tarefa;
            }
    }
            echo '<script>alert("tarefa foi adicionada.");</script>';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Lista de Tarefas</title>
        <style type="text/css">
            *{
                <php_check_syntaxecho 'margin:0;padding:0;box-sizing; border-box;';
                ?>
            }

            form{
                max-width:600px;
                margin:10px auto;
                display: block;

            }

            input[type=text]{
                width:100%;
                heigth:40px;
                border:1px solid #ccc;
                padding-left: 10px;   

            }

            input[type=submit]{
                width:100%;
                heigth:40px;
                background-color: #069;
                color: white;
                font-size:17px;
            }

            h3{
                text-align: center;


            }
        </style>
</head>
<body>
<form method="post">
        <input type="text" name="tarefa"
         placeholder="digite a tarefa...">
         <input type="submit"name="acao" value="enviar!">
</form>
<br/>
<h3>Suas listas de Tarefas</h3>
<?php 
    foreach ($_SESSION['tarefas'] as $key => $value) {
        echo '<p>Tarefa #'.$key.' '.$value.'</p>';

    }
?>
</body>
</html>
