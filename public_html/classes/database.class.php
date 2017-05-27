<?php
class database extends mysqli {
    public function __construct() {
//        if(($_SERVER['SERVER_ADDR'] == '189.38.90.28')) {
            /*
            $host = "mysql04.uni5.net";
            $dbname = "cnecbento01";
            $usuario = "cnecbento01";
            $senha = "bh6gh2i5tq";
            */
            $host = "localhost";
            $dbname = "cnec_admin";
            $usuario = "cnec_admin";
            $senha = "78idl08he4";
        /*}else {
            $host = "localhost";
            $dbname = "cnecbento01";
            $usuario = "root";
            $senha = "";
        }*/
        try {
            @$this->connect($host, $usuario, $senha, $dbname);
            if(mysqli_connect_errno() != 0) {
                throw new Exception(mysqli_connect_errno());
            }
        }catch(Exception $erro) {
            $mensagem = $erro->getMessage();
            $codigo   = $erro->getCode();
            $arquivo  = $erro->getFile();
            $trace    = $erro->getTraceAsString();
        }
    }
    public function __destruct() {
        $this->close();
    }
}