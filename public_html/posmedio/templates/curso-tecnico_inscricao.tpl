{?include file="header.tpl"?}
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js"></script>
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.maskedinput-1.2.2.min.js"></script>
<script>
    function inscricao() {
        $(".inscricao").slideToggle("slow");
        this.location = "#topo";
    }
    $(document).ready(function() {
        $("#passo_2").hide();
        var msgInput = "Preencha corretamente este campo.";
        var msgSelectRadio = "Escolha umas das opções.";
        $("#telefone").mask("(99) 9999.9999");

        $("#form_tec_inscr").validate({
            rules: {
                curso: "required",
                nome: "required",
                rg: {
                    required: true,
                    number: true
                },
                email: {
                    required: true,
                    email: true
                },
                telefone: "required"
            },
            messages: {
                curso: msgSelectRadio,
                nome: msgInput,
                rg: msgInput,
                email: msgInput,
                telefone: msgInput
            }
        });
    });
</script>
<div id="topo" class="box">
    {?if $inscrever?}
    <div class="titulo">
        <h2>Formulário de Inscrição do Candidato</h2>
    </div>
    <!-- Primeiro Formulário -->
    {?if !$cadastrou?}
    <!--<img src="/_img/curso_tecnico/hotsite.jpg" alt="Inscrição Curso Técnico" border="0" />
    <h3>Atenção</h3>
    <p><a href="/arquivos/edital_2013_1.pdf" target="_blank">Consulte o edital de bolsas de estudo para Enfermagem e Radiologia.</a></p>
    -->
    <hr />
    <form method="post" id="form_tec_inscr">
        <div id="passo_1" class="inscricao">
            <h3>Etapa 1 de 2 - Dados do candidato</h3>
            <p><label for="curso">Curso</label></p>
            <p><select id="curso" name="curso">
                    <option value="Técnico em Enfermagem - Noite">Técnico em Enfermagem - Noite</option>
                    <option value="Técnico em Radiologia">Técnico em Radiologia</option>
                    <option value="Segurança do Trabalho">Técnico em Segurança do Trabalho</option>
                </select></p>
            <p><label for="nome">Nome completo:</label></p>
            <p><input id="nome" name="nome" title="Nome completo" class="inpute gde" type="text" /></p>

            <p><label for="rg">RG:</label></p>
            <p><input id="rg" name="rg" title="RG" class="inpute" type="text" /></p>

            <p><label for="email">E-mail:</label></p>
            <p><input id="email" name="email" title="E-mail" class="inpute gde" type="text" /></p>

            <p><label for="telefone">Telefone <span class="exemplo">(xx)xxxx-xxxx</span>:</label></p>
            <p><input id="telefone" title="Telefone" name="telefone" type="text" class="inpute" /></p>

            <input value="Seguinte" id="enviar" class="botao" type="submit" /></p>
        </div>
    </form>
    {?else?}
    <h3>Etapa 2 de 2 - Impressão do Boleto Bancário</h3>
    <p>Seus dados foram registrados com sucesso. Dentro de até 24 horas você
        receberá um e-mail contendo a confirmação da sua inscrição e um
        link adicional para a impressão do boleto, não esqueça de verificar
        em sua caixa de spam. Para efetivar sua
        inscrição, imprima o boleto bancário enviado para seu e-mail e efetue o
        pagamento no Banco Bradesco ou em um terminal de auto-atendimento.</p>
        {?/if?}
        {?else?}
    Inscrições encerradas.
    {?/if?}
</div>
{?include file="footer.tpl"?}