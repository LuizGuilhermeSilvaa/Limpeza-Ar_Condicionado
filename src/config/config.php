<?php

function verificarConexao() {
    $con = new Conexao();
    $conectado = $con->connect();
    
    if ($conectado) {
        echo "<br>Conectado...<br>";
        $sql = "SELECT * FROM login";
        $result = $conectado->query($sql);
        foreach ($result as $results){
            print_r($results);
        }
    }
}

class conexao
{
    private $host = 'localhost';
    private $dbname = 'bd_frioMax';
    private $user = 'root';
    private $passwd = '';
    public function connect()
    {
        try {
            $dsn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->passwd);
            return $dsn;
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
}

verificarConexao();

?>