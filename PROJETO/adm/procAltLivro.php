<?php
session_start();
include_once('../servior.php');
if(isset($_POST['submit']))
    {
        $titulo = $user_data['titulo'];
        $desc = $user_data['desc'];
        $dir = $user_data['dir'];
        $valor = $user_data['valor'];
        
        $sqlInsert = "UPDATE tb_livro 
        SET titulo='$titulo',desc='$desc',dir='$dir',valor='$valor'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: lista_livro.php');

?>