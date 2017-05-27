<?php

class vestibulares {

    function __construct() {

    }

    function inscricoesAbertas() {
        $con = new database();
        $hoje = date('Y-m-d');
        $query = 'SELECT * FROM vestibulares WHERE insc_data_inicio <= "' . $hoje . '" AND insc_data_fim >= "' . $hoje . '"';
        $vestibular = $con->query($query);
        if ($vestibular && $vestibular->num_rows > 0) {
            return $vestibular->fetch_assoc();
        }
    }

    function lista_gabarito($id_vestibular) {
        $con = new database();
        $query = 'SELECT * FROM vestibulares WHERE gabarito_data_inicio <= NOW() AND id_fac_vestibulare = ' . $id_vestibular;
        $gabaritos = $con->query($query);
        if ($gabaritos && $gabaritos->num_rows > 0) {
            $retorno = $gabaritos->fetch_assoc();
            return $retorno;
        }
    }

    function inscrever($dados, $id) {
        $con = new database();

        $nome = strtoupper($dados['nome']);
        $sexo = strtolower($dados['sexo']);
        $nascimento = strtolower($dados['nascimento']);
        $cpf = strtolower($dados['cpf']);
        $rg = strtolower($dados['rg']);
        $orgaoExp = strtolower($dados['orgaoExp']);
        $dataEmissao = strtolower($dados['dataEmissao']);
        $endereco = strtolower($dados['endereco']);
        $numero = strtolower($dados['numero']);
        $complemento = strtolower($dados['complemento']);
        $bairro = strtolower($dados['bairro']);
        $cep = strtolower($dados['cep']);
        $cidade = strtolower($dados['cidade']);
        $uf = strtolower($dados['uf']);
        $foneRes = strtolower($dados['foneRes']);
        $foneCom = strtolower($dados['foneCom']);
        $cel = strtolower($dados['cel']);
        $email = strtolower($dados['email']);
        $curso1 = strtolower($dados['curso1']);
        $curso2 = strtolower($dados['curso2']);
        $curso3 = strtolower($dados['curso3']);
        $curso4 = strtolower($dados['curso4']);
        $curso5 = strtolower($dados['curso5']);
        $curso6 = strtolower($dados['curso6']);
        $curso7 = strtolower($dados['curso7']);
        $curso8 = strtolower($dados['curso8']);
        $deficiencia = strtolower($dados['deficiencia']);
        $qualDef = strtolower($dados['qualDef']);
        $enem = strtolower($dados['enem']);
        $enemInsc = strtolower($dados['enemInsc']);
        $enemAno = strtolower($dados['enemAno']);
        $idade = strtolower($dados['idade']);
        $estadoCivil = strtolower($dados['estadoCivil']);
        $naturalidade = strtolower($dados['naturalidade']);
        $nacionalidade = strtolower($dados['nacionalidade']);
        $nomeMae = strtolower($dados['nomeMae']);
        $tipoEm = strtolower($dados['tipoEm']);
        $preVest = strtolower($dados['preVest']);
        $qtsVest = strtolower($dados['qtsVest']);
        $curSup = strtolower($dados['curSup']);
        $curS = strtolower($dados['curS']);
        $sCur = strtolower($dados['sCur']);
        $fator = strtolower($dados['fator']);
        $renda = strtolower($dados['renda']);
        $atividade = strtolower($dados['atividade']);
        $lang = strtolower($dados['lang']);
        $langS = strtolower($dados['langS']);
        $prof = strtolower($dados['prof']);
        $empresaTrab = strtolower($dados['empresaTrab']);
        $comoSoube = strtolower($dados['comoSoube']);
        $csQual = strtolower($dados['csQual']);
        $indicadoNome = strtolower($dados['indicado_nome']);
        $indicadoCPF = strtolower($dados['indicado_cpf']);
        $indicadoMatricula = strtolower($dados['indicado_matricula']);
        $indicadoTelefone = strtolower($dados['indicado_telefone']);
        $indicadoEmail = strtolower($dados['indicado_email']);
        $data_cadastro = date('Y-m-d');

        $escola = $dados['escola'];
        $amigos = $dados['amigos'];
        $visita = $dados['visita'];

        $query = 'SELECT * FROM vestibulares_inscricoes WHERE cpf = "' . $cpf . '"';
        $verifica = $con->query($query);
        if ($verifica && $verifica->num_rows > 0) {

        } else {
            $query = "INSERT INTO vestibulares_inscricoes VALUES ('', $id, '$nome', '$sexo', '$nascimento', '$cpf', '$rg', '$orgaoExp', '$dataEmissao', '$endereco',
                '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$uf', '$foneRes', '$foneCom', '$cel', '$email', '$curso1', '$curso2', '$curso3',
                '$curso4', '$curso5', '$curso6', '$curso7', '$curso8', '$deficiencia', '$qualDef', '$enem', '$enemInsc', '$enemAno', '$idade', '$estadoCivil', '$naturalidade',
                '$nacionalidade', '$nomeMae', '$tipoEm', '$preVest', '$qtsVest', '$curSup', '$curS', '$sCur', '$fator', '$renda', '$atividade',
                '$lang', '$langS', '$prof', '$empresaTrab', '$comoSoube', '$csQual', '$data_cadastro','$indicadoNome','$indicadoCPF','$indicadoMatricula','$indicadoTelefone','$indicadoEmail', '$escola','$amigos', '$visita')";
            $insere = $con->query($query);
            $id = $con->insert_id;
            return $id;
        }
    }

    function gera_boleto($nossonumero, $inscricao, $id, $valor) {
        $con = new database();
        $identidade = '00' . $id;
        $identidade = substr($identidade, -4);
        $nossonumero = $inscricao['id_fac_vestibulare'] . $inscricao['ano'] . $inscricao['edicao'] . $identidade;
        $data_venc = mktime(0, 0, 0, date('m'), date('d') + 2, date('Y'));
        $data_venc = strftime("%Y-%m-%d", $data_venc);
        $query = "INSERT INTO vestibulares_boletos VALUES ('', '$id','$nossonumero', '$valor', '' , $id, '$data_venc')";
        $insere = $con->query($query);
        return $id;
    }

    function confirmacao_inscricao($cpf, $email) {
        $con = new database();
        $query = 'SELECT vb.pago, vi.id_vestibulares_inscricoe as id
	            FROM vestibulares_inscricoes AS vi, vestibulares_boletos AS vb
	            WHERE vi.id_vestibulares_inscricoe = vb.id_vestibulares_inscricoe AND
	            vi.cpf = "' . $cpf . '" AND
	            vi.email = "' . $email . '"';
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