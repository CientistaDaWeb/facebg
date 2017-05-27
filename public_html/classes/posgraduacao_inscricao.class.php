<?php

class posgraduacao_inscricao {

    function __construct() {

    }

    function inscrever($dados) {
        $con = new database();

        $curso_id = strtoupper($dados['curso_id']);
        $nome = strtoupper($dados['nome']);
        $cpf = strtolower($dados['cpf']);
        $rg = strtolower($dados['rg']);
        $endereco = strtolower($dados['endereco']);
        $bairro = strtolower($dados['bairro']);
        $cep = strtolower($dados['cep']);
        $cidade = strtolower($dados['cidade']);
        $uf = strtolower($dados['uf']);
        $telefone = strtolower($dados['telefone']);
        $email = strtoupper($dados['email']);
        $formado_curso = strtolower($dados['formado_curso']);
        $formado_instituicao = strtolower($dados['formado_instituicao']);
        $profissao = strtolower($dados['profissao']);
        $empresa = strtolower($dados['empresa']);
        $sabendo = strtolower($dados['sabendo']);
        $data_inscricao = date('Y-m-d');

        $query = "INSERT INTO posgraduacao_inscricoes VALUES ('', $curso_id, '$nome', '$rg', '$cpf', '$endereco',
                '$bairro', '$cidade', '$uf', '$cep', '$telefone', '$email',
                '$formado_curso', '$formado_instituicao', '$profissao', '$empresa', '$sabendo', '$data_inscricao'
                    )";
        $insere = $con->query($query);
        $id = $con->insert_id;
        return $id;
    }

    function __destruct() {

    }

}