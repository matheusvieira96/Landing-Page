<?php

$usuario = 'root';
$senha = '';
$DB = 'registro';
$host = 'localhost';

$mysqli = new mysqli($usuario, $senha, $DB, $host);

if($mysqli -> error){
    die('Ocorreu um erro na conexão: '.$mysqli ->error);
}
