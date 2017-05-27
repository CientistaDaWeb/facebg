{?include file="header.tpl"?}
{?if $curso?}
<link type="text/css" href="{?$basePATH?}/_css/prettyPhoto.css" rel="stylesheet" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.prettyPhoto.js">
</script>
<link type="text/css" href="{?$basePATH?}/_css/jquery.jcarousel.css" rel="stylesheet" />
<link type="text/css" href="{?$basePATH?}/_css/_img/tango/skin.css" rel="stylesheet" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.jcarousel.pack.js">
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#curso-fotos").jcarousel({
            scroll: 4,
            visible: 5
        });
        $("#curso-fotos a").prettyPhoto({
            theme: "light_rounded",
            counter_separator_label: " de "
        });
    });
</script>
<div class="box">
    <div class="titulo">
        <h2>{?$curso.categoria?}</h2>
    </div>
    <div id="lista-cursos" class="box-interna">
        {?if $cursos?}
        |{?foreach from=$cursos item=outroCurso?}
        <a href="/curso/{?$outroCurso.cslug?}/{?$outroCurso.slug?}" title="{?$outroCurso.curso?}">{?$outroCurso.curso?}</a>
        |
        {?/foreach?}
        {?/if?}
    </div>
    <h3>{?$curso.curso?}</h3>
    {?if $fotos?}
    <ul id="curso-fotos" class="jcarousel-skin-tango">
        {?foreach from=$fotos item=foto?}
        <li>
            <a href="http://images.serverws.com.br/cnecbento.com.br/cursos/galeria/{?$foto.imagem?}" title="{?$foto.legenda?}" rel="fotosCurso[]"><img src="http://images.serverws.com.br/cnecbento.com.br/cursos/galeria/thumbs/{?$foto.imagem?}" alt="{?$foto.legenda?}" /></a>
        </li>{?/foreach?}
    </ul>
    <p class="instrucoes">
        * Clique nas imagens para ampliar!
    </p>
    {?/if?}
    <div class="box-divisao">
        {?$curso.descricao?}
    </div>
    {?if $arquivos?}
    <div class="box-divisao arquivos">
        <h3>Anexos</h3>
        {?foreach from=$arquivos item=arquivo?}
        <a href="http://docs.serverws.com.br/cnecbento.com.br/cursos/{?$arquivo.arquivo?}" target="_blank" title="{?$arquivo.legenda?}">{?$arquivo.legenda?}</a>
        {?/foreach?}
    </div>
    {?/if?}
    {?if $arquivosPrivados && !$logadoPrivado?}
    <div class="box-divisao arquivos">
        <h3>Arquivos Privados</h3>
        <form method="POST">
            <table>
                <tr>
                    <th>Usuário</th>
                    <td><input type="text" name="usuario" id="usuario" /></td>
                </tr>
                <tr>
                    <th>Senha</th>
                    <td><input type="password" name="senha" id="senha" /></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Enviar</button></td>
                </tr>
            </table>
        </form>
    </div>
    {?/if?}
    {?if $curso.id_curso == 40?}
    <div class="box-divisao">
        <a href="/naf" style="text-align: center; display: block; padding: 10px; background: #FFC468; font-weight: bold;">Conheça o Núcleo de Apoio Fiscal e Contábil</a>
    </div>
    {?/if?}
    {?if $arquivosPrivados && $logadoPrivado?}
    <div class="box-divisao arquivos">
        <p>Orientador: {?$curso.orientador?} ({?$curso.email_orientador?})</p>
        <h3>Arquivos Privados</h3>
        {?foreach from=$arquivosPrivados item=arquivo?}
        <a href="http://docs.serverws.com.br/cnecbento.com.br/cursos/{?$arquivo.arquivo?}" target="_blank" title="{?$arquivo.legenda?}">{?$arquivo.legenda?}</a>
        {?/foreach?}
    </div>
    {?/if?}
    {?if $retorno?}
    <div id="retorno_inscricao" class="box_divisao">{?$retorno?}</div>
    {?else?}
    {?if $curso.mostra_matricula == 'S'?}
    {?if $curso.data_final >= date('Y-m-d')?}
    <script type="text/javascript" src="{?$basePATH?}/_js/jquery.form.js">
    </script>
    <script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js">
    </script>
    <script type="text/javascript" src="{?$basePATH?}/_js/jquery.maskedinput-1.2.2.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var obrigatorio = "Campo obrigatório!";

            $("#telefone").mask("(99) 9999.9999");
            $("#cpf").mask("999.999.999-99");
            $("#cep").mask("99999-999");

            $("#form_inscricao").validate({
                rules: {
                    nome: {required: true},
                    rg: {required: true},
                    cpf: {required: true},
                    endereco: {required: true},
                    bairro: {required: true},
                    cidade: {required: true},
                    uf: {required: true},
                    cep: {required: true},
                    telefone: {required: true},
                    email: {required: true,email: true}
                },
                messages: {
                    nome: {required: obrigatorio},
                    rg: {required: obrigatorio},
                    cpf: {required: obrigatorio},
                    endereco: {required: obrigatorio},
                    bairro: {required: obrigatorio},
                    cidade: {required: obrigatorio},
                    uf: {required: obrigatorio},
                    cep: {required: obrigatorio},
                    telefone: {required: obrigatorio},
                    email: {required: obrigatorio, email: "Preencha o e-mail corretamente" }
                }
            });
        });
    </script>
    <div class="box-divisao">
        <h3>Ficha de Inscrição</h3>
        <form id="form_inscricao" method="POST">
            <input type="hidden" name="curso_id" id="curso_id" value="{?$curso.id_curso?}" />
            <input type="hidden" name="curso_nome" id="curso_nome" value="{?$curso.curso?}" />
            <input type="hidden" name="curso_email" id="curso_nome" value="{?$curso.email?}" />
            <p><label for="nome">Nome Completo:</label></p>
            <p><input id="nome" name="nome" type="text" class="inpute gde" /></p>
            <p><label for="rg">RG:</label></p>
            <p><input id="rg" name="rg" type="text" class="inpute gde" /></p>
            <p><label for="cpf">CPF:</label></p>
            <p><input id="cpf" name="cpf" type="text" class="inpute medio" /></p>
            <p><label for="endereco">Endereço (rua/av, nº, complemento):</label></p>
            <p><input id="endereco" name="endereco" type="text" class="inpute gde" /></p>
            <p><label for="bairro">Bairro:</label></p>
            <p><input id="bairro" name="bairro" type="text" class="inpute gde" /></p>
            <p><label for="cidade">Cidade:</label></p>
            <p><input id="cidade" name="cidade" type="text" class="inpute gde" /></p>
            <p><label for="estado">Estado:</label></p>
            <p><input id="estado" name="estado" type="text" class="inpute pqno" /></p>
            <p><label for="cep">Cep:</label></p>
            <p><input id="cep" name="cep" type="text" class="inpute medio" /></p>
            <p><label for="telefone">Telefone:</label></p>
            <p><input id="telefone" name="telefone" type="text" class="inpute medio" /></p>
            <p><label for="email">E-mail:</label></p>
            <p><input id="email" name="email" type="text" class="inpute gde" /></p>
            <p><label for="formado_curso">Formado no Curso de:</label></p>
            <p><input id="formado_curso" name="formado_curso" type="text" class="inpute gde" /></p>
            <p><label for="formado_instituicao">Instituição da Graduação:</label></p>
            <p><input id="formado_instituicao" name="formado_instituicao" type="text" class="inpute gde" /></p>
            <p><label for="profissao">Profissão:</label></p>
            <p><input id="profissao" name="profissao" type="text" class="inpute gde" /></p>
            <p><label for="empresa">Empresa na qual trabalha:</label></p>
            <p><input id="empresa" name="empresa" type="text" class="inpute gde" /></p>
            <p><label for="sabendo">Como ficou sabendo dos cursos:</label></p>
            <p><input id="sabendo" name="sabendo" type="text" class="inpute gde" /></p>
            <p><button type="submit">Enviar Inscrição</button></p>
        </form>
    </div>
    {?/if?}
    {?/if?}
    {?/if?}
</div>
{?else?}
<p class="erro">
    Curso não encontrado!
</p>
{?/if?}
{?include file="footer.tpl"?}
