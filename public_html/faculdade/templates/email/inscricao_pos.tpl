<html>
    <style type="text/css">
        *{
            margin:0;
            padding: 0;
        }
        body{
            font-size: 14px;
            color: #949586;
            font-family: Arial, Helvetica, sans-serif back
        }
        p{
            margin-bottom: 5px;
        }
    </style>
    <body>
        <p>Nova matrícula de {?$dados.nome?}</p>
        <p><strong>Curso:</strong> {?$dados.curso_nome?}</p>
        <p><strong>RG:</strong> {?$dados.rg?}</p>
        <p><strong>CPF:</strong> {?$dados.cpf?}</p>
        <p><strong>Endereço:</strong> {?$dados.endereco?}</p>
        <p><strong>Bairro:</strong> {?$dados.bairro?}</p>
        <p><strong>Cidade:</strong> {?$dados.cidade?}</p>
        <p><strong>Estado:</strong> {?$dados.estado?}</p>
        <p><strong>Cep:</strong> {?$dados.cep?}</p>
        <p><strong>Telefone:</strong> {?$dados.telefone?}</p>
        <p><strong>E-mail:</strong> {?$dados.email?}</p>
        <p><strong>Formado no Curso de:</strong> {?$dados.formado_curso?}</p>
        <p><strong>Instituição da Graduação:</strong> {?$dados.formado_instituicao?}</p>
        <p><strong>Profissão:</strong> {?$dados.profissao?}</p>
        <p><strong>Empresa na qual trabalha:</strong> {?$dados.empresa?}</p>
        <p><strong>Como ficou sabendo dos cursos de Pós-Graduação da FACEBG:</strong> {?$dados.sabendo?}</p>

    </body>
</html>
