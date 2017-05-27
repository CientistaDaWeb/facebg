{?include file="header.tpl"?}
{?if $message?}
{?$message?}
{?else?}
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js"> </script>
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.maskedinput-1.2.2.min.js"> </script>
<script type="text/javascript">
    $(function(){
        var msgInput = "Preencha corretamente este campo.";
        var msgSelectRadio = "Escolha umas das opções.";

        $("#nascimento").mask("99/99/9999");
        $("#cpf").mask("999.999.999-99");
        $("#cep").mask("99999-999");
        $("#cep_com").mask("99999-999");

        $("#form-seminario").validate({
            rules: {
                nome: "required",
                sexo: "required",
                estado_civil: "required",
                nascimento: "required",
                profissao: "required",
                identidade: {
                    required: true,
                    number:true
                },
                cpf: "required",
                endereco: "required",
                numero: {
                    required: true,
                    number:true
                },
                bairro: "required",
                cep: {
                    required: true,
                    minlength: 9
                },
                cidade: "required",
                uf: "required",
                telefone: "required",
                email: {
                    required: true,
                    email: true
                },
                graduacao: "required",
                instituicao: "required",
                empresa: "required",
                endereco_com: "required",
                numero_com: {
                    required: true,
                    number:true
                },
                bairro_com: "required",
                cep_com: {
                    required: true,
                    minlength: 9
                },
                cidade_com: "required",
                uf_com: "required",
                telefone_com: "required",
                funcao: "required",
                area: "required"
            },
            messages: {
                nome: msgInput,
                sexo: msgSelectRadio,
                estado_civil: msgSelectRadio,
                nascimento: msgInput,
                identidade: msgInput,
                cpf: msgInput,
                endereco: msgInput,
                numero: "Preencha corretamente este campo, caso não haja número use '0'.",
                bairro: msgInput,
                cep: msgInput,
                cidade: msgInput,
                uf: msgInput,
                telefone_res: msgInput,
                email: msgInput,
                graduacao: msgInput,
                instituicao: msgInput,
                endereco_com: msgInput,
                numero_com: "Preencha corretamente este campo, caso não haja número use '0'.",
                bairro_com: msgInput,
                cep_com: msgInput,
                cidade_com: msgInput,
                uf_com: msgInput,
                telefone_com: msgInput,
                funcao: msgInput,
                area: msgInput
            }
        });
    });
</script>
<div id="flyer">
    <img src="/_img/seminario_saude_do_trabalhador/flyer.jpg" />
    <!-- <a href="javascript:void(0);" id="inscricao-seminario">Inscreva-se aqui</a> -->
</div>
<div id="formulario-seminario">
    <form method="POST" id="form-seminario">
        <h3>Dados Pessoais</h3>
        <p><label for="nome">Nome completo:</label></p>
        <p><input id="nome" name="nome" title="Nome completo" class="inpute gde" type="text" /></p>
        <p><label for="sexo">Sexo:</label></p>
        <p><select name="sexo" id="sexo" class="inpute medio">
                <option value="">Escolha</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select></p>
        <p><label for="estado_civil">Estado Civil:</label></p>
        <p><select name="estado_civil" class="inpute">
                <option value="">Selecione o estado civil</option>
                <option value="solteiro">Solteiro (a)</option>
                <option value="casado">Casado(a)</option>
                <option value="divorciado">Divorciado(a)</option>
                <option value="separado">Separado(a)</option>
                <option value="viuvo">Viúvo(a)</option>
                <option value="outro">Outro</option>
            </select></p>
        <p><label for="nascimento">Data de nascimento <span class="exemplo">(dd/mm/aaaa)</span>:</label></p>
        <p><input id="nascimento" name="nascimento" title="Data de nascimento" class="inpute" maxlength="10" type="text" /></p>
        <p><label for="profissao">Profissão:</label></p>
        <p><input id="profissao" name="profissao" title="Profissão" class="inpute gde" type="text" /></p>
        <p><label for="identidade">Carteira de Identidade:</label></p>
        <p><input id="identidade" name="identidade" title="Carteira de Identidade" class="inpute gde" type="text" /></p>
        <p><label for="cpf">CIC(CPF):</label></p>
        <p><input id="cpf" title="CIC(CPF)" name="cpf" type="text" class="inpute" /></p>
        <p><label for="endereco">Endereço:</label></p>
        <p><input id="endereco" name="endereco" title="Endereço" class="inpute gde" type="text" /></p>
        <p><label for="numero">Número:</label></p>
        <p><input id="numero" name="numero" title="Número" class="inpute" type="text" /></p>
        <p><label for="complemento">Complemento:</label></p>
        <p><input id="complemento" name="complemento" title="Complemento" class="inpute" type="text" /></p>
        <p><label for="bairro">Bairro:</label></p>
        <p><input id="bairro" name="bairro" title="Bairro" class="inpute gde" type="text" /></p>
        <p><label for="cep">CEP</label></p>
        <p><input id="cep" name="cep" title="CEP" class="inpute" maxlength="9" type="text" /></p>
        <p><label for="cidade">Cidade:</label></p>
        <p><input id="cidade" name="cidade" title="Cidade" class="inpute gde" type="text" /></p>
        <p><label for="uf">UF <span class="exemplo">(sigla)</span>:</label></p>
        <p><input id="uf" name="uf" title="UF" class="inpute" maxlength="2" size="2" type="text" /></p>
        <p><label for="telefone">Telefone:</label></p>
        <p><input id="telefone" name="telefone" title="Telefone" class="inpute" type="text" /></p>
        <p><label for="cel">Celular:</label></p>
        <p><input id="cel" name="cel" title="Celular" class="inpute" type="text" /></p>
        <p><label for="email">E-mail:</label></p>
        <p><input id="email" name="email" title="E-mail" class="inpute gde" type="text" /></p>
        <p><label for="graduacao">Graduação:</label></p>
        <p><input id="graduacao" name="graduacao" title="Graduação" class="inpute gde" type="text" /></p>
        <p><label for="instituicao">Instituição:</label></p>
        <p><input id="instituicao" name="instituicao" title="Instituição" class="inpute gde" type="text" /></p>
        <h3>Dados Profissionais</h3>
        <p><label for="empresa">Instituição/Empresa:</label></p>
        <p><input id="empresa" name="empresa" title="Instituição/Empresa" class="inpute gde" type="text" /></p>
        <p><label for="cnpj">CNPJ (opcional):</label></p>
        <p><input id="cnpj" name="cnpj" title="CNPJ" class="inpute" type="text" /></p>
        <p><label for="endereco_com">Endereço:</label></p>
        <p><input id="endereco_com" name="endereco_com" title="Endereço" class="inpute gde" type="text" /></p>
        <p><label for="numero_com">Número:</label></p>
        <p><input id="numero_com" name="numero_com" title="Número" class="inpute" type="text" /></p>
        <p><label for="complemento_com">Complemento:</label></p>
        <p><input id="complemento_com" name="complemento_com" title="Complemento" class="inpute" type="text" /></p>
        <p><label for="bairro_com">Bairro:</label></p>
        <p><input id="bairro_com" name="bairro_com" title="Bairro" class="inpute gde" type="text" /></p>
        <p><label for="cep_com">CEP</label></p>
        <p><input id="cep_com" name="cep_com" title="CEP" class="inpute" maxlength="9" type="text" /></p>
        <p><label for="cidade_com">Cidade:</label></p>
        <p><input id="cidade_com" name="cidade_com" title="Cidade" class="inpute gde" type="text" /></p>
        <p><label for="uf_com">UF <span class="exemplo">(sigla)</span>:</label></p>
        <p><input id="uf_com" name="uf_com" title="UF" class="inpute" maxlength="2" size="2" type="text" /></p>
        <p><label for="email_com">E-mail:</label></p>
        <p><input id="email_com" name="email_com" title="E-mail" class="inpute gde" type="text" /></p>
        <p><label for="telefone_com">Telefone:</label></p>
        <p><input id="telefone_com" name="telefone_com" title="Telefone" class="inpute" type="text" /></p>
        <p><label for="funcao">Função:</label></p>
        <p><input id="funcao" name="funcao" title="Função" class="inpute gde" type="text" /></p>
        <p><label for="area">Área:</label></p>
        <p><input id="area" name="area" title="Área" class="inpute gde" type="text" /></p>
        <p><button type="submit">Enviar Inscrição</button>
    </form>
</div>
<!--
<style type="text/css">
    #flyer{
        position: relative;
    }
    #inscricao-seminario{
        width: 220px;
        height: 75px;
        display: inline-block;
        margin: -100px 0 0 280px;
        text-indent: -9000px;
        position: absolute;
    }
    #formulario-seminario{
        display: none;
    }
</style>
<script type="text/javascript">
    $(function(){
        $("#inscricao-seminario").click(function(){
            $("#flyer").hide();
            $("#formulario-seminario").show();
            $("#nome").focus();
        });
    });
</script>
-->
{?/if?}
{?include file="footer.tpl"?}