{?include file="header.tpl"?}
<img src="/_img/vestibular/2013/3/hotsite.jpg" />
<style type="text/css">
    #linksCursos a{
        display: block;
        text-indent: -9000px;
    }
    a#cursoAdministracao{
        width: 220px;
        height: 130px;
        position: absolute;
        margin-left: 470px;
        margin-top: 695px;
        top: 0;
    }
    #cursos{
        position: absolute;
        top: 0;
        margin-left: 70px;
        margin-top: 710px;
        width: 400px;
    }
    #cursos .curso_direita, #cursos .curso_esquerda{
        float: left;;
    }
    #cursos a{
        width: 205px;
        height: 19px;
        margin-bottom: 1px;
    }
    #cursos .curso_esquerda{
        margin-right: 30px;
    }
    #cursos .curso_esquerda a{
        width: 130px;
    }
    #btInscrevase{
        margin-top: -110px;
        margin-left: 65px;
        height: 75px;
        text-indent: -9000px;
        display: block;
        position: absolute;
        width: 655px;
        {?if !$mostraBotao?}
            background: #274F8D;
        {?/if?}
    }
</style>
<div id="linksCursos">
    <a id="cursoAdministracao" href="/curso/graduacao/administracao" title="Graduação em Administração">Administração</a>
    <div id="cursos">
        <div class="curso_esquerda">
            <a href="/curso/graduacao/biomedicina" title="Biomedicina">Bio Medicina</a>
            <a href="/curso/graduacao/enfermagem" title="Graduação em Enfermagem">Enfermagem</a>
            <a href="/curso/graduacao/nutricao" title="Graduação em Nutrição">Nutrição</a>
            <a href="/curso/graduacao/fisioterapia" title="Graduação em Fisioterapia">Fisioterapia</a>
        </div>
        <div class="curso_direita">
            <a href="/curso/graduacao/publicidade-e-propaganda" title="Graduação em Publicidade e Propaganda">Publicidade e Propaganda</a>
            <a href="/curso/graduacao/turismo" title="Graduação em Turismo">Turismo</a>
            <a href="/curso/graduacao/ciencias-contabeis" title="Ciências Contábeis">Ciências Contábeis</a>
        </div>
    </div>
</div>

<a id="btInscrevase" {?if $mostraBotao?}href="/vestibular/inscricao"{?/if?}>Inscreva-se</a>

<br />
<hr />
<br />
<br /><br /><br />
<p>Para maiores informações, contate <a href="mailto:vestibular@cnecbento.com.br">vestibular@cnecbento.com.br</a> ou através do formulário abaixo:</p>
<br />
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