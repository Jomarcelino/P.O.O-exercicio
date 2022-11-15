<?php
include("../servidor.php");

// iremos pegar o dados preenchido no formulario

$login = $_POST['login'];
$senha = $_POST['senha'];

//echo $login . " " . $senha; 

$sql = " select  * from tb_usuario " ;
$sql .= " where login_us = '".$login."' and  senha_us ='".md5($senha)."'";

//echo $sql;

// executar a string feita em php e converte em comando sql

//    $resultado  = mysqli_query($banco, $sql );
//  saber o numero de linha retornado
//    echo mysqli_num_rows($resultado);

$resultado = $OOP->query($sql);

$OOP->query($sql);
//direcionar para a tela menu.php

// if($OOP->num_rows == 1 ){
if($resultado->num_rows == 1){

// if(mysqli_num_rows($resultado) == 1){

$campo = mysqli_fetch_array($resultado);

$_SESSION["login"]["id"] = $campo["cod_us"];
$_SESSION["login"]["user"] = $campo["nome_us"];

$OOP->close();

header("location:menu.php");
}else{
header("location:index.php");
}