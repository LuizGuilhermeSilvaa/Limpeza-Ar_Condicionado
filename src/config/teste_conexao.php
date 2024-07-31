<?php
// importando configurações de conexão com BD
require_once 'config.php';
class tester_conexao{
    function verificarConexao(){
        // Estabelecendo conexão com banco de dados
        $con = new Conexao();
        $conectado = $con->connect();
        // Verificando se a conexão foi bem sucedida
        if(!$conectado){echo"Houve um erro de conexão"; return;}
        echo "<br>Conectado...<br>";
        $sql = "SELECT * FROM login LIMIT 1";
        $sql = $conectado->prepare($sql);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        if($result){echo'True';}else{echo'False';}
    }
}
$tester = new tester_conexao();
$tester->verificarConexao();
