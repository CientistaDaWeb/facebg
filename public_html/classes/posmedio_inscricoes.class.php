<?php

class posmedio_inscricoes {

    function __construct() {

    }

    function inscrever($dados) {
        $con = new database();

        $nome = strtoupper($dados['nome']);
        //$sexo = strtolower($dados['sexo']);
        //$nascimento = strtolower($dados['nascimento']);
        //$cpf = strtolower($dados['cpf']);
        $rg = strtolower($dados['rg']);
        //$orgaoExp = strtolower($dados['orgaoExp']);
        //$dataEmissao = strtolower($dados['dataEmissao']);
        //$endereco = strtolower($dados['endereco']);
        //$numero = strtolower($dados['numero']);
        //$complemento = strtolower($dados['complemento']);
        //$bairro = strtolower($dados['bairro']);
        //$cep = strtolower($dados['cep']);
        //$cidade = strtolower($dados['cidade']);
        //$uf = strtolower($dados['uf']);
        //$foneRes = strtolower($dados['foneRes']);
        //$foneCom = strtolower($dados['foneCom']);
        //$cel = strtolower($dados['cel']);
        $email = strtolower($dados['email']);
        $curso = strtolower($dados['curso']);
        //$idade = strtolower($dados['idade']);
        $telefone = strtolower($dados['telefone']);
        $data_cadastro = date('Y-m-d');

        //$query = 'SELECT * FROM posmedio_inscricoes WHERE cpf = "' . $cpf . '"';
        //$verifica = $con->query($query);
        //if ($verifica && $verifica->num_rows > 0) {
//            return false;
//        } else {
        //$query = "INSERT INTO posmedio_inscricoes VALUES ('', '$nome', '$nascimento', '$cpf', '$rg', '$orgaoExp', '$dataEmissao', '$endereco',
        //'$numero', '$complemento', '$bairro', '$cep', '$cidade', '$uf', '$foneRes', '$foneCom', '$cel', '$email', '$curso', '$idade', '$sexo', '$data_cadastro')";
        $query = "INSERT INTO posmedio_inscricoes VALUES ('', '$curso', '$nome', '$rg', '$email', '$telefone', '$data_cadastro')";
        $insere = $con->query($query);
        $id = $con->insert_id;
        if ($id):
            return $id;
        endif;
        //      }
    }

    function gera_boleto($nossonumero, $id, $valor) {
        $con = new database();
        $identidade = '00' . $id;
        $identidade = substr($identidade, -4);
        $nossonumero = $identidade;
        $data_venc = mktime(0, 0, 0, date('m'), date('d') + 2, date('Y'));
        $data_venc = strftime("%Y-%m-%d", $data_venc);
        $query = "INSERT INTO posmedio_boletos VALUES ('', '$id','$nossonumero', '$valor', '' , $id, '$data_venc')";
        $insere = $con->query($query);
        return $id;
    }

    function confirmacao_inscricao($cpf, $email) {
        $con = new database();
        $query = 'SELECT pb.pago, pi.id_posmedio_inscricoe as id
	            FROM posmedio_inscricoes AS pi, posmedio_boletos AS pb
	            WHERE pi.id_posmedio_inscricoe = vb.id_posmedio_inscricoe AND
	            pi.cpf = "' . $cpf . '" AND
	            pi.email = "' . $email . '"';
        $verifica = $con->query($query);
        if ($verifica && $verifica->num_rows > 0) {
            $verifica = $verifica->fetch_assoc();
            $confirmacao['pago'] = $verifica['pago'];
            $confirmacao['id'] = $verifica['id'];
            return $confirmacao;
        } else {
            $alerta['tipo'] = 'erro';
            $alerta['msg'] = 'Dados Incorretos!';
            return $alerta;
        }
    }

    function __destruct() {

    }

}