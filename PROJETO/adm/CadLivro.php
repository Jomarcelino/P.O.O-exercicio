<?php
session_start();

include("../servidor.php");

// variavel post
$titulo = $_POST["titulo"];
$desc = $_POST["desc"];
$valor = $_POST["valor"];
echo $ed = $_POST["ed"];

$imagem = $_FILES["arq"];

//1º colocar o caminho da imagen no banco
$dir = "img/" .$imagem["name"];

//2º os dados do banco
    $sql = "INSERT INTO TB_LIVRO(COD_ED, 
                        TITULO_LIV, 
                        DESC_LIV, 
                        IMG_LIV, 
                        VALOR_LIV)
                        VALUE($ed , '$titulo', '$desc' , '$dir' , '$valor')";

    //EXECUTAR

    $resp = mysqli_query($banco , $sql);

    //saber se algo foi executado no banco()
    if (mysqli_affected_rows($banco)){
        echo "<script type='text/javascript'>
        alert('cadastro efetuado);
        </script>";
    }

//3º mover a imagem para a pasta

//4º identificar o usuario e livro

?>