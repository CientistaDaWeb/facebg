{?include file="header.tpl"?}
<div class="box">
    <div class="titulo">
        <h2>Ficha de Inscrição</h2>
    </div>
    {?if $temp_msg?}
    <p class="error">{?$temp_msg?}</p>
    {?else?}
    <script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js"> </script>
    <script type="text/javascript" src="{?$basePATH?}/_js/jquery.maskedinput-1.2.2.min.js"> </script>
    <script type="text/javascript">
    $(document).ready(function(){
        var msgInput = "Preencha corretamente este campo.";
        var msgSelectRadio = "Escolha umas das opções.";
        
        $("#nascimento").mask("99/99/9999");
        $("#cpf").mask("999.999.999-99");
        $("#cep").mask("99999-999");
        $("#foneRes").mask("99 9999.9999");
        $("#foneCom").mask("99 9999.9999");
        $("#celular").mask("99 9999.9999");
        
        $("#formInscricao").validate({
            rules: {
              nome: "required",
              sexo: "required",
              nascimento: "required",
              cep: {
                required: true,
                minlength: 9
              },
              rg: "required",
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
              email: {
                required: true,
                email: true
              },
              escolaridade: "required",
              experiencia: "required",
              sabendo: "required",
              pagamento: "required"
            },
            messages: {
              nome: msgInput,
              sexo: msgSelectRadio,
              nascimento: msgInput,
              cpf: msgInput,
              rg: msgInput,
              endereco: msgInput,
              numero: "Preencha corretamente este campo, caso não haja número use '0'.",
              bairro: msgInput,
              cep: msgInput,
              cidade: msgInput,
              uf: msgInput,
              email: {
                required: true,
                email: true
              },
              escolaridade: msgSelectRadio,
              experiencia: msgSelectRadio,
              sabendo: msgSelectRadio,
              pagamento: msgSelectRadio
            }
          });
    });
    </script>
    <form id="formInscricao" method="post">
        <p><label for="nome">Nome Completo:</label></p>
        <p><input type="text" name="nome" id="nome" class="inpute gde" /></p>

        <p><label for="sexo">Sexo:</label></p>
        <p><select name="sexo" id="sexo" class="inpute medio">
                <option value="">Escolha</option>
                <option>Masculino</option>
                <option>Feminino</option>
            </select></p>

        <p><label for="nascimento">Data de nascimento <span class="exemplo">(dd/mm/aaaa)</span>:</label></p>
        <p><input id="nascimento" name="nascimento" title="Data de nascimento" class="inpute" maxlength="10" type="text" /></p>

        <p><label for="cpf">CPF <span class="exemplo">(somente números):</span></label></p>
        <p><input id="cpf" name="cpf" title="CPF" class="inpute" type="text" /></p>

        <p><label for="rg">RG:</label></p>
        <p><input id="rg" name="rg" title="RG" class="inpute" type="text" /></p>

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

        <p><label for="foneRes">Fone residencial:</label></p>
        <p><input id="foneRes" name="foneRes" title="Fone residencial medio" class="inpute" type="text" /></p>

        <p><label for="foneCom">Fone comercial:</label></p>
        <p><input id="foneCom" name="foneCom" title="Fone comercial medio" class="inpute" type="text" /></p>

        <p><label for="celular">Celular:</label></p>
        <p><input id="celular" name="celular" title="Celular" class="inpute medio" type="text" /></p>

        <p><label for="email">E-mail:</label></p>
        <p><input id="email" name="email" title="E-mail" class="inpute gde" type="text" /></p>

        <p><label for="escolaridade">Escolaridade</label></p>
        <p><select name="escolaridade" class="inpute">
                <option value="">Selecione</option>
                <option>Ensino Médio Incompleto</option>
                <option>Ensino Médio Completo</option>
                <option>Superior Incompleto</option>
                <option>Superior Completo</option>
            </select></p>

        <p><label for="curso">Curso:</label></p>
        <p><input id="curso" name="curso" title="Curso" type="text" class="inpute gde" /></p>

        <p><label for="instituicao">Instituição:</label></p>
        <p><input id="instituicao" name="instituicao" title="Instituição" type="text" class="inpute gde" /></p>

        <p><label for="profissao">Profissão:</label></p>
        <p><input id="profissao" name="profissao" title="Profissão" type="text" class="inpute gde" /></p>

        <p><label for="experiencia">Possui alguma experiência profissional em Audiovisual?</label></p>
        <p><select name="experiencia" id="experiencia" class="inpute">
                <option value="">Selecione</option>
                <option>Sim, trabalho nessa área</option>
                <option>Sim, já realizei alguns trabalhos audiovisuais</option>
                <option>Não nunca trabalhei na área</option>
            </select></p>

        <p><label for="sabendo">Como ficou sabendo do curso?</label></p>
        <p><select name="sabendo" id="sabendo" class="inpute">
                <option value="">Selecione</option>
                <option>Folder / Cartaz</option>
                <option>Jornal</option>
                <option>Site</option>
                <option>Indicação de amigos/parentes</option>
                <option>Outro</option>
            </select></p>

        <p><label for="pagamento">Forma de pagamento</label></p>
        <p><select name="pagamento" id="pagamento" class="inpute">
                <option value="">Selecione</option>
                <option>1x R$ 800,00</option>
                <option>2x R$ 400,00</option>
                <option>1x R$ 270 + 2x R$ 265</option>
            </select></p>

        <p><label for="observacao">Observação:</label></p>
        <p><textarea id="observacao" name="observacao" title="Observação"class="inpute gde"></textarea></p>

        <p><input class="botao" type="submit" value="Enviar Inscrição" /></p>
    </form>
</div>
{?/if?}
{?include file="footer.tpl"?}