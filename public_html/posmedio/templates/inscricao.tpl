{?include file="header.tpl"?}
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js"></script>
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.maskedinput-1.2.2.min.js">
</script><script type="text/javascript">
    $(document).ready(function() {
        var obrigatorio = "Campo obrigatório!";
        $("#telefone").mask("(99) 9999.9999");
        $("#form_inscricao").validate({
            rules: {
                nome: {
                    required: true
                },
                rg: {
                    required: true
                },
                telefone: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                curso: {
                    required: true
                }
            },
            messages: {
                nome: {
                    required: obrigatorio
                },
                rg: {
                    required: obrigatorio
                },
                telefone: {
                    required: obrigatorio
                },
                email: {
                    required: obrigatorio,
                    email: "Preencha o e-mail corretamente"
                },
                curso: {
                    required: obrigatorio
                }
            }
        });
    });
</script>
<div class="box">
    <div class="titulo">
        <h2>Inscrição para Curso Técnico</h2>
    </div>
    {?if $temp_msg?}
    <p class="error">{?$temp_msg?}</p>
    {?else?}
    <img src="/_img/curso_tecnico/hotsite.jpg" alt="Inscrição Curso Técnico" border="0" />
    <h3>Atenção</h3>
    <p><a href="/arquivos/edital_2013_1.pdf" target="_blank">Consulte o edital de bolsas de estudo para Enfermagem e Radiologia.</a></p>
    <hr />
    <form id="form_inscricao" method="post">
        <p>
            <label for="curso">Curso:</label>
        </p>
        <p>
            <select id="curso" name="curso">
                <option value="Técnico em Enfermagem - Manhã">Técnico em Enfermagem - Manhã</option>
                <option value="Técnico em Enfermagem - Noite">Técnico em Enfermagem - Noite</option>
                <option value="Técnico em Radiologia">Técnico em Radiologia</option>
                <option value="Técnico em Meio Ambiente">Técnico em Meio Ambiente</option>
                <option value="Segurança do Trabalho">Técnico em Segurança do Trabalho</option>
            </select>
        </p>
        <p>
            <label for="nome">Nome:</label>
        </p>
        <p>
            <input id="nome" name="nome" type="text" class="inpute gde" />
        </p>
        <p class="negrito">
            <label for="rg">RG:</label>
        </p>
        <p>
            <input id="rg" name="rg" type="text" class="inpute medio" />
        </p>
        <p>
            <label for="email">E-mail:</label>
        </p>
        <p>
            <input id="email" name="email" type="text" class="inpute medio" />
        </p>
        <p>
            <label for="telefone">Telefone:</label>
        </p>
        <p>
            <input id="telefone" name="telefone" type="text" class="inpute" />
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
    {?/if?}
</div>
{?include file="footer.tpl"?}