{?include file="header.tpl"?}
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
    <div class="titulo">
        <h2>Ouvidoria</h2>
    </div>
    {?if $temp_msg?}
    <p class="error">{?$temp_msg?}</p>
    {?else?}
    <form id="form_ouvidoria" method="post">
        <p>
            <label for="tipo">
                Tipo de mensagem:
            </label>
        </p>
        <p>
            <select name="tipo" id="tipo" class="inpute medio">
                <option>Sugestão</option>
                <option>Reclamação</option>
                <option>Elogio</option>
                <option>Pontos Fortes</option>
                <option>Pontos Fracos</option>
            </select>
        </p>
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