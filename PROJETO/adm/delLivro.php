<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
</head>

<body>
    <div class="container">

<?php
if(!empty($_GET['id']))
{
    include_once('../servidor.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT FROM tb_livro WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM tb_livro WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location:lista_livro.php');
?>
</body>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>