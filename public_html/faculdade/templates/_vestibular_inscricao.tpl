{?include file='header.tpl'?}
{?if $inscricao?}
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js"> </script>
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.maskedinput-1.2.2.min.js"> </script>
<script type="text/javascript">
    function inscricao(){
        $(".inscricao").slideToggle("slow");
        this.location = "#topo";
    }
    $(document).ready(function(){

        $("#passo_2").hide();

        var msgInput = "Preencha corretamente este campo.";
        var msgSelectRadio = "Escolha umas das opções.";
        $("#nascimento").mask("99/99/9999");
        $("#cpf").mask("999.999.999-99");
        $("#dataEmissao").mask("99/99/9999");
        $("#cep").mask("99999-999");
        $("#foneRes").mask("99 9999.9999");
        $("#foneCom").mask("99 9999.9999");
        $("#cel").mask("99 9999.9999");

        $("#form_vest_inscr").validate({
            rules: {
                nome: "required",
                sexo: "required",
                nascimento: "required",
                cpf: "required",
                rg: {
                    required: true,
                    number:true
                },
                orgaoExp: "required",
                dataEmissao: "required",
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
                curso1: "required",
                curso2: "required",
                curso3: "required",
                curso4: "required",
                curso5: "required",
                curso6: "required",
                curso7: "required",
                curso8: "required",
                enem: "required",
                idade: {
                    required: true,
                    number:true
                },
                estadoCivil: "required",
                naturalidade: "required",
                nacionalidade: "required",
                nomeMae: "required",
                tipoEm: "required",
                preVest: "required",
                qtsVest: "required",
                curSup: "required",
                fator: "required",
                renda: "required",
                atividade: "required",
                lang: "required",
                prof: "required",
                comoSoube: "required"
            },
            messages: {
                nome: msgInput,
                sexo: msgSelectRadio,
                nascimento: msgInput,
                cpf: msgInput,
                rg: msgInput,
                orgaoExp: msgInput,
                dataEmissao: msgInput,
                endereco: msgInput,
                numero: "Preencha corretamente este campo, caso não haja número use '0'.",
                bairro: msgInput,
                cep: msgInput,
                cidade: msgInput,
                uf: msgInput,
                email: msgInput,
                curso1: msgSelectRadio,
                curso2: msgSelectRadio,
                curso3: msgSelectRadio,
                curso4: msgSelectRadio,
                curso5: msgSelectRadio,
                curso6: msgSelectRadio,
                curso7: msgSelectRadio,
                curso8: msgSelectRadio,
                deficiencia: msgSelectRadio,
                enem: msgSelectRadio,
                idade: msgInput,
                estadoCivil: msgSelectRadio,
                naturalidade: msgInput,
                nacionalidade: msgInput,
                nomeMae: msgInput,
                tipoEm: msgSelectRadio,
                preVest: msgSelectRadio,
                qtsVest: msgSelectRadio,
                curSup: msgSelectRadio,
                fator: msgSelectRadio,
                renda: msgSelectRadio,
                atividade: msgSelectRadio,
                lang: msgSelectRadio,
                prof: msgSelectRadio,
                comoSoube: msgSelectRadio
            }
        });

        $("#divdeficiencia").hide();
        $("#divenem").hide();
        $("#cursoDiv").hide();
        $("#langDiv").hide();
        $("#qualDiv").hide();
        $("#profSim").hide();

        $("#deficiencia").change(function(){
            if($("#deficiencia").attr("value") == "sim"){
                $("#divdeficiencia").show("slow");
                $("#qualDef").rules("add", {
                    required: true,
                    messages: {
                        required: msgInput
                    }
                });
            }else{
                $("#divdeficiencia").hide("slow");
                $("#qualDef").rules("remove");
            }
        });
        $("#enem").change(function(){
            if($("#enem").attr("value") == "sim"){
                $("#divenem").show("slow");
                $("#enemInsc").rules("add", {
                    required: true,
                    messages: {
                        required: msgInput
                    }
                });
                $("#enemAno").rules("add", {
                    required: true,
                    messages: {
                        required: msgInput
                    }
                });
            }else{
                $("#divenem").hide("slow");
                $("#enemInsc").rules("remove");
                $("#enemAno").rules("remove");
            }
        });
        $("#curSup").change(function(){
            if($("#curSup").attr("value") == "sim"){
                $("#cursoDiv").show("slow");
                $("#curS").rules("add", {
                    required: true,
                    messages: {
                        required: msgInput
                    }
                });
                $("#sCur").rules("add", {
                    required: true,
                    messages: {
                        required: msgSelectRadio
                    }
                });
            }else{
                $("#cursoDiv").hide("slow");
                $("#curS").rules("remove");
                $("#sCur").rules("remove");
            }
        });
        $("#lang").change(function(){
            if($("#lang").attr("value") == "nao"){
                $("#langDiv").hide("slow");
                $("#langS").rules("remove");
            }else{
                $("#langDiv").show("slow");
                $("#langS").rules("add", {
                    required: true,
                    messages: {
                        required: msgInput
                    }
                });
            }
        });
        $("#prof").change(function(){
            if($("#prof").attr("value") == "sim"){
                $("#profSim").show("slow");
                $("#empresaTrab").rules("add", {
                    required: true,
                    messages: {
                        required: msgInput
                    }
                });
            }else{
                $("#profSim").hide("slow");
                $("#empresaTrab").rules("remove");
            }
        });
        $("#comoSoube").change( function() {
            if($(this).attr("value") === ''){
                $("#qualDiv").hide("slow");
                $("#csQual").rules("remove");
            }else{
                if($(this).attr("value") === 'outros'){
                    $("#qualDiv").show("slow");
                    $("#csQual").rules("add", {
                        required: true,
                        messages: {
                            required: msgInput
                        }
                    });
                }else{
                    $("#qualDiv").hide("slow");
                    $("#csQual").rules("remove");
                }
            }
        });

        $("#curso1").change(function(){
            if($("#curso2").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso3").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso4").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso5").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso6").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso7").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso8").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }
        });
        $("#curso2").change(function(){
            if($("#curso1").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso3").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso4").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso5").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso6").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso7").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso8").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }
        });
        $("#curso3").change(function(){
            if($("#curso1").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso2").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso4").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso5").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso6").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso7").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso8").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }
        });
        $("#curso4").change(function(){
            if($("#curso1").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso2").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso3").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso5").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso6").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso7").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso8").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }
        });
        $("#curso5").change(function(){
            if($("#curso1").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso2").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso3").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso4").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso6").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso7").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso8").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }
        });
        $("#curso6").change(function(){
            if($("#curso1").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso2").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso3").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso4").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso5").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso7").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso8").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }
        });
        $("#curso7").change(function(){
            if($("#curso1").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso2").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso3").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso4").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso5").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso6").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso8").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }
        });
        $("#curso8").change(function(){
            if($("#curso1").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso2").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso3").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso4").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso5").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso6").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }else if($("#curso7").attr("value") === $(this).attr("value") && $(this).attr("value") != ''){
                alert("Você não pode escolher cursos repetidos.");
            }
        });
    });
</script>
<div id="topo" class="box">
    <div class="titulo">
        <h2>Formulário de Inscrição do Candidato</h2>
    </div>
    <h3>
        Atenção: Após pagamento do Boleto Bancário, todos os candidatos deverão entregar, na Secretaria da Faculdade, até 04/12/2012: fotocópia da RG (frente e verso) , fotocópia do Comprovante de Conclusão do Ensino Médio, e cópia do boletim de desempenho no ENEM (em caso de aproveitamento da nota para a Redação).
    </h3>
    <!-- Primeiro Formulário -->
    {?if !$cadastro?}
    <form method="post" id="form_vest_inscr" action="/vestibular/inscrever/">
        <div id="passo_1" class="inscricao">
            <h3>Etapa 1 de 3 - Dados do candidato</h3>
            <p><label for="nome">Nome completo:</label></p>
            <p><input id="nome" name="nome" title="Nome completo" class="inpute gde" type="text" /></p>

            <p><label for="sexo">Sexo:</label></p>
            <p><select name="sexo" id="sexo" class="inpute medio">
                    <option value="">Escolha</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select></p>

            <p><label for="nascimento">Data de nascimento <span class="exemplo">(dd/mm/aaaa)</span>:</label></p>
            <p><input id="nascimento" name="nascimento" title="Data de nascimento" class="inpute" maxlength="10" type="text" /></p>

            <p><label for="cpf">CPF <span class="exemplo">(somente números):</span></label></p>
            <p><input id="cpf" name="cpf" title="CPF" class="inpute" type="text" /></p>

            <p><label for="rg">RG:</label></p>
            <p><input id="rg" name="rg" title="RG" class="inpute" type="text" /></p>

            <p><label for="orgaoExp">Orgão Expedidor:</label></p>
            <p><input id="orgaoExp" name="orgaoExp" title="Orgão Expedidor" class="inpute" type="text" /></p>

            <p><label for="dataEmissao">Data de Emissão <span class="exemplo">(dd/mm/aaaa)</span>:</label></p>
            <p><input id="dataEmissao" name="dataEmissao" title="Data da Emissão" class="inpute" maxlength="10" type="text" /></p>

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
            <p><input id="foneRes" name="foneRes" title="Fone residencial" class="inpute" type="text" /></p>

            <p><label for="foneCom">Fone comercial:</label></p>
            <p><input id="foneCom" name="foneCom" title="Fone comercial" class="inpute" type="text" /></p>

            <p><label for="cel">Celular:</label></p>
            <p><input id="cel" name="cel" title="Celular" class="inpute" type="text" /></p>

            <p><label for="email">E-mail:</label></p>
            <p><input id="email" name="email" title="E-mail" class="inpute gde" type="text" /></p>

            <p><b>Selecione os cursos abaixo em ordem de preferência de ingresso:</b></p>
            <p><label for="curso1">1ª Opção</label></p>
            <p><select id="curso1" name="curso1" class="inpute">
                    <option value="">1ª Opção</option>
                    <option value="adm">Administração</option>
                    <option value="enf">Enfermagem</option>
                    <option value="pub">Publicidade e Propaganda</option>
                    <option value="tur">Turismo</option>
                    <option value="nut">Nutrição</option>
                    <option value="fis">Fisioterapia</option>
                    <option value="bio">Biomedicina</option>
                    <option value="con">Ciências Contábeis</option>
                </select></p>

            <p><label for="curso2">2ª Opção</label></p>
            <p><select id="curso2" name="curso2" class="inpute">
                    <option value="">2ª Opção</option>
                    <option value="adm">Administração</option>
                    <option value="enf">Enfermagem</option>
                    <option value="pub">Publicidade e Propaganda</option>
                    <option value="tur">Turismo</option>
                    <option value="nut">Nutrição</option>
                    <option value="fis">Fisioterapia</option>
                    <option value="bio">Biomedicina</option>
                    <option value="con">Ciências Contábeis</option>
                </select></p>

            <p><label for="curso3">3ª Opção</label></p>
            <p><select id="curso3" name="curso3" class="inpute">
                    <option value="">3ª Opção</option>
                    <option value="adm">Administração</option>
                    <option value="enf">Enfermagem</option>
                    <option value="pub">Publicidade e Propaganda</option>
                    <option value="tur">Turismo</option>
                    <option value="nut">Nutrição</option>
                    <option value="fis">Fisioterapia</option>
                    <option value="bio">Biomedicina</option>
                    <option value="con">Ciências Contábeis</option>
                </select></p>

            <p><label for="curso4">4ª Opção</label></p>
            <p><select id="curso4" name="curso4" class="inpute">
                    <option value="">4ª Opção</option>
                    <option value="adm">Administração</option>
                    <option value="enf">Enfermagem</option>
                    <option value="pub">Publicidade e Propaganda</option>
                    <option value="tur">Turismo</option>
                    <option value="nut">Nutrição</option>
                    <option value="fis">Fisioterapia</option>
                    <option value="bio">Biomedicina</option>
                    <option value="con">Ciências Contábeis</option>
                </select></p>

            <p><label for="curso5">5ª Opção</label></p>
            <p><select id="curso5" name="curso5" class="inpute">
                    <option value="">5ª Opção</option>
                    <option value="adm">Administração</option>
                    <option value="enf">Enfermagem</option>
                    <option value="pub">Publicidade e Propaganda</option>
                    <option value="tur">Turismo</option>
                    <option value="nut">Nutrição</option>
                    <option value="fis">Fisioterapia</option>
                    <option value="bio">Biomedicina</option>
                    <option value="con">Ciências Contábeis</option>
                </select></p>

            <p><label for="curso6">6ª Opção</label></p>
            <p><select id="curso6" name="curso6" class="inpute">
                    <option value="">6ª Opção</option>
                    <option value="adm">Administração</option>
                    <option value="enf">Enfermagem</option>
                    <option value="pub">Publicidade e Propaganda</option>
                    <option value="tur">Turismo</option>
                    <option value="nut">Nutrição</option>
                    <option value="fis">Fisioterapia</option>
                    <option value="bio">Biomedicina</option>
                    <option value="con">Ciências Contábeis</option>
                </select></p>

            <p><label for="curso7">7ª Opção</label></p>
            <p><select id="curso7" name="curso7" class="inpute">
                    <option value="">7ª Opção</option>
                    <option value="adm">Administração</option>
                    <option value="enf">Enfermagem</option>
                    <option value="pub">Publicidade e Propaganda</option>
                    <option value="tur">Turismo</option>
                    <option value="nut">Nutrição</option>
                    <option value="fis">Fisioterapia</option>
                    <option value="bio">Biomedicina</option>
                    <option value="con">Ciências Contábeis</option>
                </select></p>

            <p><label for="curso8">8ª Opção</label></p>
            <p><select id="curso8" name="curso8" class="inpute">
                    <option value="">8ª Opção</option>
                    <option value="adm">Administração</option>
                    <option value="enf">Enfermagem</option>
                    <option value="pub">Publicidade e Propaganda</option>
                    <option value="tur">Turismo</option>
                    <option value="nut">Nutrição</option>
                    <option value="fis">Fisioterapia</option>
                    <option value="bio">Biomedicina</option>
                    <option value="con">Ciências Contábeis</option>
                </select></p>

            <p><label for="deficiencia">Portador de deficiência física?</label></p>
            <p><select name="deficiencia" id="deficiencia" class="inpute medio">
                    <option id="deficiencia_nao" value="nao">Não</option>
                    <option id="deficiencia_sim" value="sim">Sim</option>
                </select></p>
            <div id="divdeficiencia">
                <p><label for="qualDef">Qual?</label>
                    <input id="qualDef" name="qualDef" title="Qual deficiência?" class="inpute" type="text" /></p>
            </div>

            <p><label for="enem">Deseja utilizar o ENEM (Exame Nacional do Ensino Médio) para o aproveitamento da nota da redação?</label></p>
            <p><select name="enem" id="enem" class="inpute medio">
                    <option id="enem_nao" value="nao">Não</option>
                    <option id="enem_sim" value="sim">Sim</option>
                </select></p>
            <div id="divenem">
                <p><label for="enemInsc" class="ajuste">Número da inscrição:</label></p>
                <p><input id="enemInsc" name="enemInsc" title="Número da Inscrição" class="inpute" type="text" /></p>
                <p><label for="enemAno">Ano:</label></p>
                <p><select id="enemAno" name="enemAno" class="inpute">
                        <option value="">Ano do Enem</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                    </select></p>
            </div>

            <p><span>Documentação necessária:</span></p>
            <ul>
                <li>Cópia da carteira de identidade e do histórico escolar do ensino médio.</li>
                <li>ENEM: Interessados em utilizar a nota da redação do ENEM devem entregar no ato da inscrição o boletim de desempenho.</li>
                <li>Somente para participantes do ENEM de 2007 a 2011.</li>
                <li>Esta documentação deverá ser entregue até 04/12/2012 na Secretaria da Faculdade onde deve ser retirado também o COMPROVANTE DE INSCRIÇÃO.</li>
            </ul>
            <p><input id="enviar" value="Continuar" class="botao" type="button" onclick="inscricao(2);" /></p>
        </div>

        <div id="passo_2" class="inscricao">
            <h3>Etapa 2 de 3 - Histórico do candidato</h3>
            <p><label for="idade">Idade <span class="exemplo">(somente dígitos)</span>:</label></p>
            <p><input id="idade" title="Sua Idade" name="idade" maxlength="3" type="text" class="inpute" /></p>

            <p><label for="estadoCivil">Estado Civil:</label></p>
            <p><select name="estadoCivil" class="inpute">
                    <option value="">Selecione o estado civil</option>
                    <option value="solteiro">Solteiro (a)</option>
                    <option value="casado">Casado(a)</option>
                    <option value="divorciado">Divorciado(a)</option>
                    <option value="separado">Separado(a)</option>
                    <option value="viuvo">Viúvo(a)</option>
                    <option value="outro">Outro</option>
                </select></p>

            <p><label for="naturalidade">Naturalidade <span class="exemplo">(Ex.: Bento Gonçalves)</span>:</label></p>
            <p><input id="naturalidade" title="Naturalidade" name="naturalidade" type="text" class="inpute" /></p>

            <p><label for="nacionalidade">Nacionalidade <span class="exemplo">(Ex.: Brasileiro)</span>:</label></p>
            <p><input id="nacionalidade" title="Nacionalidade" name="nacionalidade" type="text" class="inpute" /></p>

            <p><label for="nomeMae">Nome da Mãe</label></p>
            <p><input title="Nome da Mãe" id="nomeMae" name="nomeMae" type="text" class="inpute gde" /></p>

            <p><label for="tipoEm">Que tipo de Ensino Médio você concluiu ou concluirá?</label></p>
            <p><select name="tipoEm" class="inpute">
                    <option value="">Selecione o tipo de Ensino Médio</option>
                    <option value="medioRegular">Ensino Médio Regular</option>
                    <option value="medioProfi">Ensino Médio Profissionalizante</option>
                    <option value="eja">EJA - Ensino para Jovens e Adultos</option>
                    <option value="outro">Outro</option>
                </select></p>

            <p><label for="preVest">Você frequenta curso pré-vestibular?</label></p>
            <p><select name="preVest" id="preVest" class="inpute medio">
                    <option value="nao">Não</option>
                    <option value="sim">Sim</option>
                </select></p>

            <p><label for="qtsVest">Quantas vezes você jâ prestou vestibular?</label></p>
            <p><select name="qtsVest" class="inpute">
                    <option value="">Selecione o número de vezes</option>
                    <option value="0">Nenhuma Vez</option>
                    <option value="1">Uma Vez</option>
                    <option value="2">Duas Vezes</option>
                    <option value="3">Três vezes ou mais</option>
                </select></p>

            <p><label for="curSup">Já iniciou curso superior?</label></p>
            <p><select name="curSup" id="curSup" class="inpute medio">
                    <option id="curSim" value="nao">Não</option>
                    <option id="curNao" value="sim">Sim</option>
                </select></p>
            <div id="cursoDiv">
                <p><label for="curS" class="espaco">Qual?</label></p>
                <p><input id="curS" name="curS" title="Qual Curso" type="text" class="inpute gde" /></p>
                <p>Situação do Curso:</p>
                <p><select id="sCur" name="sCur" class="inpute">
                        <option value="">Selecione a situação do curso</option>
                        <option value="concluido">Concluído</option>
                        <option value="cursando">Cursando</option>
                        <option value="interrompido">Interrompido</option>
                    </select></p>
            </div>

            <p><label for="fator">Qual fator principal que o levou a escolher o curso para o qual esta se inscrevendo?</label></p>
            <p><select name="fator" class="inpute">
                    <option value="">Selecione a situação do curso</option>
                    <option value="gostei">Sempre Gostei</option>
                    <option value="pessoal">Aptidão Pessoal</option>
                    <option value="influencia">Influência da Família</option>
                    <option value="trabalho">Trabalho em empresa ligada ao ramo</option>
                    <option value="outro">Outro</option>
                </select></p>

            <p><label for="renda">Qual a renda mensal da Família</label></p>
            <p><select name="renda" class="inpute">
                    <option value="">Selecione a Renda Mensal</option>
                    <option value="1a5">De 1 a 5 salários</option>
                    <option value="5a10">De 5 a 10 salários</option>
                    <option value="10">Mais de 10 salários</option>
                </select></p>

            <p><label for="ativdade">Exerce Atividade Remunerada</label></p>
            <p><select name="atividade" id="atividade" class="inpute medio">
                    <option value="nao">Não</option>
                    <option value="sim">Sim</option>
                </select></p>

            <p><label for="lang">Possui domínio de lingua estrangeira</label></p>
            <p><select name="lang" id="lang" class="inpute medio">
                    <option id="langNao" value="nao">Não</option>
                    <option id="langR" value="sim">Sim, razoavelmente</option>
                    <option id="langC" value="sim">Sim, domino completamente</option>
                </select></p>
            <div id="langDiv">
                <p><label for="langS">Qual?</label> <input id="langS" title="Qual?" name="langS" type="text" class="inpute" /></p>
            </div>

            <p><label for="prof">Você já atua profissionalmente na área do curso escolhido?</label></p>
            <p><select name="prof" id="prof" class="inpute medio">
                    <option id="empresaNao" value="nao">Não</option>
                    <option id="empresaSim" value="sim">Sim</option>
                </select></p>
            <div id="profSim">
                <p><label for="empresaTrab">Qual empresa?</label></p>
                <p><input id="empresaTrab" name="empresaTrab" type="text" class="inpute gde" /></p>
            </div>

            <p><label for="comoSoube">Como você ficou sabendo do vestibular?</label></p>
            <p><select id="comoSoube" name="comoSoube" class="inpute">
                    <option value="">Selecione como ficou sabendo do Vestibular</option>
                    <option value="panfleto">Panfleto/Cartaz</option>
                    <option value="tv">TV</option>
                    <option value="site">Site</option>
                    <option value="indicacao">Indicação de Amigos/Parentes</option>
                    <option value="jornal">Jornal</option>
                    <option value="radio">Rádio</option>
                    <option value="outros">Outros</option>
                </select></p>

            <div id="qualDiv">
                <p><label for="csQual">Qual?</label> <input id="csQual" title="qual" name="csQual" type="text" class="inpute" /></p>
            </div>
            <!--
        <div id="indicacao">
            <p>INDICAÇÃO DO INTEGRANTE DO COMPLEXO DE ENSINO CENECISTA (preencher com os dados do indicado)</p>
            <p><label for="indicado_nome">Nome:</label></p>
            <p><input id="indicado_nome" title="Nome do Indicado" name="indicado_nome" type="text" class="inpute" /></p>
            <p><label for="indicado_cpf">CPF:</label></p>
            <p><input id="indicado_cpf" title="CPF do Indicado" name="indicado_cpf" type="text" class="inpute" /></p>
            <p><label for="indicado_matricula">Matrícula:</label></p>
            <p><input id="indicado_matricula" title="Matrícula do Indicado" name="indicado_matricula" type="text" class="inpute" /></p>
            <p><label for="indicado_telefone">Telefone:</label></p>
            <p><input id="indicado_telefone" title="Telefone do Indicado" name="indicado_telefone" type="text" class="inpute" /></p>
            <p><label for="indicado_email">E-mail:</label></p>
            <p><input id="indicado_email" title="E-mail do Indicado" name="indicado_email" type="text" class="inpute" /></p>
        </div>
            -->
            <p><input value="Anterior" id="voltar" class="botao" type="button" onclick="inscricao(1);" />
                <input value="Seguinte" id="enviar" class="botao" type="submit" onclick="inscricao(1);" /></p>
        </div>
    </form>
    {?else?}
    <h2>Formulário de Inscrição do Candidato</h2>
    <h3>Etapa 3 de 3 - Impressão do Boleto Bancário</h3>
    <p>Seus dados foram registrados com sucesso. Para efetivar sua
        inscrição, imprima o boleto bancário e efetue o pagamento no Banco do
        Brasil ou em um terminal de auto-atendimento. Dentro de até 24 horas
        você receberá um e-mail contendo a confirmação da sua inscrição e um
        link adicional para a impressão do boleto, caso você não possa imprimir
        agora.</p>
    <p>IMPORTANTE:</p>
    <p>Data do vestibular: <span>{?$inscricao.data|date_format:"%d de %m de %Y"?}</span><br />
        Horário: <span>19:00 Hs (candidatos devem comparecer com mínimo 30min de antecedência)</span>.<br>
        Documentação: <span>Candidatos inscritos pela internet devem trazer RG (Cópia e original) e histórico de conclusão de ensino médio(Cópia).</span></p>
    <!--<p><a href="" target="_blank">Clique aqui para imprimir o boleto bancário.</a></p>-->
    {?/if?}</div>
{?else?}
<div class="conteudo">
    <div class="alerta erro">Período de Inscrições Encerrado!</div>
</div>
{?/if?}
{?include file='footer.tpl'?}
