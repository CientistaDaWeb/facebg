{?include file="header.tpl"?}
<img src="/_img/vestibular/2011/3/cartaz-01.jpg" />
<style type="text/css">
    #linksCursos a{
        display: block;
        text-indent: -9000px;
    }
    a#cursoAdministracao{
        width: 193px;
        height: 45px;
        position: absolute;
        margin-left: 430px;
        margin-top: 440px;
        top: 0;
    }
    #cursos{
        position: absolute;
        top: 0;
        margin-left: 575px;
        margin-top: 610px;
}
    #cursos a{
        width: 163px;
        height: 40px;
        margin-bottom: 5px;
}
</style>
<div id="linksCursos">
    <a id="cursoAdministracao" href="/curso/graduacao/administracao" title="Graduação em Administração">Administração</a>
    <div id="cursos">
        <a id="cursoEnfermagem" href="/curso/graduacao/enfermagem" title="Graduação em Enfermagem">Enfermagem</a>
        <a id="cursoFisioterapia" href="/curso/graduacao/fisioterapia" title="Graduação em Fisioterapia">Fisioterapia</a>
        <a id="cursoNutricao" href="/curso/graduacao/nutricao" title="Graduação em Nutrição">Nutrição</a>
        <a id="cursoPublicidade" href="/curso/graduacao/publicidade-e-propaganda" title="Graduação em Publicidade e Propaganda">Publicidade e Propaganda</a>
        <a id="cursoTurismo" href="/curso/graduacao/turismo" title="Graduação em Turismo">Turismo</a>
    </div>
</div>
<p>Para maiores informações, contate <a href="mailto:vestibular@cnecbento.com.br">vestibular@cnecbento.com.br</a> ou através do formulário abaixo.</p>
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js">
</script>
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.maskedinput-1.2.2.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var obrigatorio = "Campo obrigatório!";

        $("#telefone").mask("(99) 9999.9999");

        $("#form_ouvidoria").validate({
            rules: {
                nome: {
                    required: true
                },
                endereco: {
                    required: true
                },
                cidade: {
                    required: true
                },
                uf: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                mensagem: {
                    required: true
                }
            },
            messages: {
                nome: {
                    required: obrigatorio
                },
                endereco: {
                    required: obrigatorio
                },
                cidade: {
                    required: obrigatorio
                },
                uf: {
                    required: obrigatorio
                },
                email: {
                    required: obrigatorio,
                    email: "Preencha o e-mail corretamente"
                },
                mensagem: {
                    required: obrigatorio
                }
            }
        });
    });
</script>
<div class="box">
    {?if $temp_msg?}
    <p class="error">{?$temp_msg?}</p>
    {?else?}
    <form id="form_ouvidoria" method="post">
        <p>
            <label for="nome">
                Nome:
            </label>
        </p>
        <p>
            <input id="nome" name="nome" type="text" class="inpute gde" />
        </p>
        <p>
            <label for="endereco">
                Endereço:
            </label>
        </p>
        <p>
            <input id="endereco" name="endereco" type="text" class="inpute gde" />
        </p>
        <p>
            <label for="cidade">
                Cidade:
            </label>
        </p>
        <p>
            <input id="cidade" name="cidade" type="text" class="inpute gde" />
        </p>
        <p class="negrito">
            <label for="estado">
                UF:
            </label>
        </p>
        <p>
            <input id="uf" name="uf" type="text" class="inpute pqno" />
        </p>
        <p>
            <label for="email">
                E-mail:
            </label>
        </p>
        <p>
            <input id="email" name="email" type="text" class="inpute medio" />
        </p>
        <p>
            <label for="telefone">
                Telefone:
            </label>
        </p>
        <p>
            <input id="telefone" name="telefone" type="text" class="inpute" />
        </p>
        <p>
            <label for="mensagem">
                Mensagem:
            </label>
        </p>
        <p>
            <textarea id="mensagem" name="mensagem" cols="30" rows="5" class="inpute"></textarea>
        </p>
        <p>
            <button type="submit">
                Enviar
            </button>
        </p>
    </form>
    {?/if?}
</div>
{?include file="footer.tpl"?}