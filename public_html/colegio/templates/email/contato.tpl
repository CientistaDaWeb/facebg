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
        <p>E-mail enviado por {?$nome?}</p>
        {?if $endereco?}
        <p><strong>Endereço:</strong> {?$endereco?}</p>
        {?/if?}
        {?if $cidade?}
        <p><strong>Cidade:</strong> {?$cidade?}</p>
        {?/if?}
        {?if $estado?}
        <p><strong>Estado:</strong> {?$uf?}</p>
        {?/if?}
        {?if $telefone?}
        <p><strong>Telefone:</strong> {?$telefone?}</p>
        {?/if?}
        <p><strong>Mensagem:</strong><br />
        {?$mensagem?}</p>
    </body>
</html>
