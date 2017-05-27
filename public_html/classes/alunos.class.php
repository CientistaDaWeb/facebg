<?php

class alunos {

    var $id_aluno, $id_setor, $matricula, $nome, $senha, $ativo;

    function __construct() {

    }

    function loga($setor) {
        $con = new database();
        $sql = 'SELECT a.* FROM alunos a, setors s
            WHERE matricula = "' . $this->matricula . '"
            AND senha = "' . md5($this->senha) . '"
            AND s.id_setor = a.id_setor
            AND s.slug = "' . $setor . '"';
        $login = $con->query($sql);
        if ($login && $login->num_rows > 0) {
            $login = $login->fetch_assoc();
            $_SESSION['nome'] = $login['nome'];
            $_SESSION['matricula'] = $login['matricula'];
            $_SESSION['email'] = $login['email'];
            $_SESSION['ativo'] = $login['ativo'];
            header('location: /cnecvirtual');
        }
    }

    function boletim($matricula, $setor) {
        $arquivo = realpath('../boletins/' . $setor . '/' . $matricula . '.PDF');
        if (is_file($arquivo)) {
            return true;
        } else {
            return false;
        }
    }

    //SELECT h.* FROM historico AS h INNER JOIN setors AS s ON h.id_setor = s.id_setor WHERE matricula = "9010" AND s.setor = "faculdade" AND situacao = "Cursada"
    //SELECT h.* FROM historico AS h INNER JOIN setors AS s ON h.id_setor = s.id_setor WHERE matricula = "9010" AND s.setor = "faculdade" AND situacao = "Não Cursada"
    //SELECT h.* FROM historico AS h INNER JOIN setors AS s ON h.id_setor = s.id_setor WHERE matricula = "9010" AND s.setor = "faculdade" AND situacao = "Aproveitada"
    //SELECT h.* FROM historico AS h INNER JOIN setors AS s ON h.id_setor = s.id_setor WHERE matricula = "9010" AND s.setor = "faculdade" AND situacao = "Matriculado"

    function historico($matricula, $setor, $situacao) {
        $con = new database();
        $sql = 'SELECT h.* FROM historico AS h
            INNER JOIN setors AS s ON h.id_setor = s.id_setor
            WHERE matricula = "' . $matricula . '"
            AND s.setor = "' . $setor . '"
            AND situacao = "' . $situacao . '"';
        $itens = $con->query($sql);
        if ($itens && $itens->num_rows > 0) {
            while ($item = $itens->fetch_assoc()) {
                $dados[] = $item;
            }
            return $dados;
        }
    }

    function matricula($matricula, $setor) {
        $arquivo = realpath('../matriculas/' . $setor . '/' . $matricula . '.PDF');
        if (is_file($arquivo)) {
            return true;
        } else {
            return false;
        }
    }

    function enviaSenha($setor, $matricula, $email, $password = '') {
        $con = new database();
        $sql = 'SELECT a.id_aluno, a.nome FROM alunos a, setors s
            WHERE a.email = "' . $email . '"
            AND a.matricula = "' . $matricula . '"
            AND s.id_setor = a.id_setor
            AND s.slug = "' . $setor . '"';
        $data = $con->query($sql);
        if ($data && $data->num_rows > 0) {
            $item = $data->fetch_assoc();
            if (!$password) {
                $CaracteresAceitos = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                $max = strlen($CaracteresAceitos) - 1;
                $password = null;
                for ($i = 0; $i < 8; $i++) {
                    $password .= $CaracteresAceitos{mt_rand(0, $max)};
                }
            }
            $senha = md5($password);
            $sql = 'UPDATE alunos SET senha = "' . $senha . '" WHERE id_aluno = ' . $item['id_aluno'];
            $con->query($sql);
            $nome = utf8_decode($item['nome']);

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Host = "179.96.225.9";
            $mail->SMTPAuth = true;
            $mail->Port = 25;
            $mail->Username = "site";
            $mail->Password = "st13f5";

            $mail->IsHTML(true);
            $mail->SetLanguage("br");
            $mail->From = 'secretaria@cnecbento.com.br';
            $mail->FromName = utf8_decode('Secretaria Complexo Cenecista');
            $mail->AddAddress($email, $nome);
            //$mail->AddAddress('fernando@ween.com.br', 'Fernando Henrique');

            $mensagem = utf8_decode("Olá, $nome, <br><br>
                Sua senha de acesso ao Cnec Virtual foi resetada.<br>
                Seus novos dados de acesso são:<br>
                Matricula: $matricula<br>
                Senha: $password<br><br>
                Atenciosamente,<br>
                Complexo Cenecista");
            $corpo = '<HTML><BODY style="PADDING-RIGHT: 0px; PADDING-LEFT: 0px; FONT-SIZE: 14px; PADDING-BOTTOM: 0px; MARGIN: 0px; COLOR: #949586; FONT-FAMILY: Arial, Helvetica, sans-serif" bgColor=#ffffff>' . $mensagem . '</BODY></HTML>';
            $mail->Body = $corpo;
            $mail->Subject = utf8_decode('Alteração de dados de acesso Cenec Virtual');
            if ($mail->Send()) {
                return 'Verifique seu e-mail para acessar a senha nova!';
            } else {
                return 'Erro ao enviar o e-mail com a senha nova!';
            }
        } else {
            return false;
        }
    }

    function mudaEmail($email) {
        $con = new database();
        $sql = 'UPDATE alunos SET email = "' . $email . '" WHERE matricula = ' . $_SESSION['matricula'];
        $con->query($sql);
        $_SESSION['email'] = $email;
        return 'E-mail alterado com sucesso!';
    }

    function novaSenha($setor, $matricula, $email, $password = '') {
        $con = new database();
        $sql = 'SELECT a.id_aluno, a.nome FROM alunos a, setors s
            WHERE a.email = "' . $email . '"
            AND a.matricula = "' . $matricula . '"
            AND s.id_setor = a.id_setor
            AND s.slug = "' . $setor . '"';
        $data = $con->query($sql);
        if ($data && $data->num_rows > 0) {
            $item = $data->fetch_assoc();
            if (!$password) {
                $CaracteresAceitos = 'abcdefghijklmnopqrstuvwxyz0123456789';
                $max = strlen($CaracteresAceitos) - 1;
                $password = null;
                for ($i = 0; $i < 5; $i++) {
                    $password .= $CaracteresAceitos{mt_rand(0, $max)};
                }
            }
            $senha = md5($password);
            $sql = 'UPDATE alunos SET senha = "' . $senha . '" WHERE id_aluno = ' . $item['id_aluno'];
            $con->query($sql);

            return $password;
        } else {
            return false;
        }
    }

    public

    function verificaMatricula($setor, $matricula) {
        $con = new database();
        $sql = 'SELECT a.id_aluno, a.nome FROM alunos a, setors s
            WHERE a.matricula = "' . $matricula . '"
            AND s.id_setor = a.id_setor
            AND s.slug = "' . $setor . '"';
        $data = $con->query($sql);
        if ($data && $data->num_rows > 0) :
            return true;
        else:
            return false;
        endif;
    }

    function __destruct() {

    }

}

