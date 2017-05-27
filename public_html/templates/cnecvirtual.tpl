{?include file="header.tpl"?}
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var obrigatorio = "Campo obrigatório!";
        $("#formSenha").validate({
            rules: {
                password: {
                    required: true
                }
            },
            messages: {
                password: {
                    required: obrigatorio
                }
            }
        });
        $("#formEmail").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: obrigatorio
                }
            }
        });
    });
</script>
<div class="box">
    <div class="titulo">
        <h2>Cnecvirtual</h2>
    </div>
    {?if $temFoto?}
    <div style="float:left; display: inline; margin-right: 10px;">
        <img src="/cnecvirtual/foto/{?$smarty.session.matricula?}" width="120px;" />
    </div>
    {?/if?}
    <h3>Seja bem vindo de volta {?$smarty.session.nome?} | <a href="/cnecvirtual/sair">Sair</a></h3>
    {?if $alert_msg?}
    <p class="error">{?$alert_msg?}</p>
    {?/if?}
    <div class="box-divisao arquivos">
        <h4>Modificar Senha!</h4>
        <form method="post" id="formSenha">
            <p><label class="password">Senha:</label></p>
            <p><input type="password" name="password" id="password" class="inpute gde" /></p>
            <p><button type="submit">
                    Trocar senha
                </button></p>
        </form>
    </div>
    <div class="box-divisao arquivos">
        <h4>Modificar o e-mail - {?$smarty.session.email?}!</h4>
        <form method="post" id="formEmail">
            <p><label class="email">Email:</label></p>
            <p><input type="text" name="email" id="email" class="inpute gde" /></p>
            <p><button type="submit">
                    Trocar email
                </button></p>
        </form>
    </div>
    <div class="box-divisao arquivos destaque">
        <h3>MATRICULA</h3>
        {?if $temMatricula?}
        <a href="/cnecvirtual/matricula/{?$smarty.session.matricula?}" title="Matricula de {?$smarty.session.nome?}">Ver Matrícula</a>
        {?else?}
        Não disponível!
        {?/if?}
    </div>

    <div class="box-divisao arquivos destaque">
        <h3>Requerimento de Matrícula</h3>
        {?if $temRequerimento?}
        <a href="/cnecvirtual/requerimento/{?$smarty.session.matricula?}" title="Matricula de {?$smarty.session.nome?}">Ver Requerimento de Matrícula</a>
        {?else?}
        Não disponível!
        {?/if?}
    </div>
    <div class="box-divisao arquivos">
        <h3>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</h3>
        {?if $contrato_geral?}
        <a href="/arquivos/cnecvirtual/GERAL_CONTRATO_EDUCACAO_SUPERIOR.pdf">CONTRATO DE PRESTAÇÃO DE SERVIÇOS EDUCACIONAIS EDUCAÇÃO SUPERIOR</a>
        {?/if?}
        {?if $contrato_50?}
        <a href="/arquivos/cnecvirtual/GERAL_CONTRATO_EDUCACAO_SUPERIOR.pdf">CONTRATO DE PRESTAÇÃO DE SERVIÇOS EDUCACIONAIS EDUCAÇÃO SUPERIOR – BOLSISTA PARCIAL 50% (PROUNI - CNEC) </a>
        {?/if?}
        {?if $contrato_100?}
        <a href="/arquivos/cnecvirtual/GERAL_CONTRATO_EDUCACAO_SUPERIOR.pdf">AO CONTRATO DE PRESTAÇÃO DE SERVIÇOS EDUCACIONAIS EDUCAÇÃO SUPERIOR – BOLSISTA INTEGRAL 100% (PROUNI - CNEC) </a>
        {?/if?}
    </div>
    <div class="box-divisao arquivos">
        <h3>*** Confirme sua sala no boletim! ***</h3>
    </div>
    {?if $rematricula?}
    <div class="box-divisao arquivos">
        <h3>MATRÍCULAS PARA O 1º SEMESTRE DE 2014</h3>
        <h3>PREZADO ACADÊMICO,</h3>
        <h3>Sua rematricula está marcada para {?$rematricula.data?} às {?$rematricula.horario?}</h3>
        <p>Você deverá comparecer à Secretaria da Faculdade com o requerimento de matrícula já com a orientação do Coordenador de Curso.</p>
        <p>Neste dia, é feita a cobrança da 1º Contribuição Social do 1º Semestre de 2012 - as 05 contribuições restantes ficam com vencimento para o dia 08 de cada mês.</p>
        <p>Acadêmicos com contribuições em atraso deverão procurar a tesouraria da Faculdade para regularizar a situação. NÃO SERÃO FEITOS ACERTOS NA REMATRÍCULA.</p>
        <p>Os alunos que não confirmarem a matrícula deverão procurar a Instituição para realizar o Trancamento ou Cancelamento da Matrícula, se assim não o fizer, o mesmo terá sua situação como desistente, consequentemente, perderá vículo com a Instituição, o que levará a realizar novo Processo Seletivo.</p>
        <p>As datas e o horário da REMATRÍCULA deverão ser obedecidos, EVITAREMOS ASSIM LONGAS FILAS E UM MELHOR ATENDIMENTO A TODOS.</p>
        <!--<h3>INICIO DAS AULAS 1º SEMESTRE DE 2012: 01/08/2011</h3>-->
    </div>
    {? elseif $orientacao ?}
    <div class="box-divisao arquivos">
        <h3>ORIENTAÇÕES DE REMATRÍCULA (escolha das disciplinas para o 1º Semestre de 2012)</h3>
        <p>Sua orientação está agendada para <b>{?$orientacao.data?} - {?$orientacao.horario?}</b>.</p>
        {?if $orientacao.curso == 'TURISMO' ?}
        <p>Os acadêmicos deverão procurar a Coordenadora do Curso  Profª. MSc. Juliana de Souza Dartora na SALA DE COORDENAÇÃO (2º andar - em frente ao xerox) nas datas e horários estipulados, já munidos do requerimento de matrícula disponível no site.</p>
        <p>Datas para Orientação:<br/><br/>
            18/11 - sexta-feira das 15h às 19h45<br />
            25/11 - sexta-feira das 15h às 18h30<br />
            02/12 - sexta-feira das 15h às 18h48</p>
            {?elseif $orientacao.curso == 'NUTRICAO'?}
        <p>Os acadêmicos deverão procurar a Coordenadora do Curso  Profª. MSc. Letícia Schmidt na SALA DE COORDENAÇÃO (2º andar - ao lado do xerox) nas datas e horários estipulados, já munidos do requerimento de matrícula - disponível no site.</p>
        {?elseif $orientacao.curso == 'PUBLICIDADE E PROPAGANDA'?}
        <p>Os acadêmicos deverão procurar o Coordenador do Curso  Profa MSc. Eliane Zanluchi na SALA DE COORDENAÇÃO (2º andar - em frente a Biblioteca) nas datas e horários estipulados, já munidos do requerimento de matrícula - disponível no site.</p>
        {?elseif $orientacao.curso == 'FISIOTERAPIA'?}
        <p>Os acadêmicos deverão procurar a Coordenadora do Curso  Profª. MSc. Samantha Angélica Pasa Pecce na SALA DE COORDENAÇÃO (2º andar - próximo ao Xerox) nas datas e horários estipulados, já munidos do requerimento de matrícula - disponível no site..</p>
        {?elseif $orientacao.curso == 'ENFERMAGEM'?}
        <p>Os acadêmicos deverão procurar a Coordenadora do Curso  Profª. MSc. NÚBIA BECHE na SALA DE COORDENAÇÃO (2º andar – em frente ao elevador) nas datas e horários estipulados, já munidos do requerimento de matrícula - disponível no site.</p>
        {?elseif $orientacao.curso == 'ADMINISTRACAO'?}
        <p>Os acadêmicos deverão procurar o Coordenador do Curso  Prof. MSc. Gilberto Hummes na SALA DE COORDENAÇÃO (2º andar - em frente ao Xerox) nas datas e horários estipulados, já munidos do requerimento de matrícula - disponível no site.</p>
        {?/if?}
    </div>
    {?/if?}
    <div class="box-divisao arquivos">
        <h3>Boletim</h3>
        {?if $temBoletim?}
        <a href="/cnecvirtual/boletim/{?$smarty.session.matricula?}" title="Boletim de {?$smarty.session.nome?}">Ver Boletim</a>
        {?else?}
        Não disponível!
        {?/if?}
    </div>
    <div class="box-divisao arquivos">
        <h3>Guia acadêmico</h3>
        <a href="/arquivos/guia_academico_2011.pdf" target="_blank" title="Guia Acadêmico 2011">Ver Guia</a>
    </div>
    <div class="box-divisao arquivos">
        <h3>Boleto de Matrícula</h3>
        {?if $temBoleto?}
        <div>
            <a href="/cnecvirtual/boleto/{?$smarty.session.matricula?}" target="_blank">Acesse agora o seu boleto</a>
        </div>
        {?else?}
        Não disponível!
        {?/if?}
    </div>
    {?if $ativo?}
    <div class="box-divisao arquivos">
        <form method="POST">
            <h3>Solicitar Documentação à Secretaria</h3>
            <input type="hidden" value="true" name="solicitacao" id="solicitacao" />
            <input type="hidden" value="{?$smarty.session.nome?}" name="solicitacao_nome" id="solicitacao_nome" />
            <input type="hidden" value="{?$smarty.session.matricula?}" name="solicitacao_matricula" id="solicitacao_matricula" />
            <p><select name="solicitacao_documento" id="solicitacao_documento">
                    <option value="">Selecione...</option>
                    <option value="Aproveitamento de Disciplina">Aproveitamento de Disciplina - R$ 15,00</option>
                    <option value="Trancamento de Matrícula ">Trancamento de Matrícula - R$ 20,00</option>
                    <option value="Histórico Escolar">Histórico Escolar - R$ 25,00</option>
                    <option value="Atestado">Atestado - R$ 2,00</option>
                    <option value="Averbação de atividades complementares">Averbação de atividades complementares - R$ 10,00</option>
                    <option value="Bloqueto de Contribuições Sociais (2ª Via)">Bloqueto de Contribuições Sociais (2ª Via) - R$ 5,00</option>
                </select>
                <button type="submit">Solicitar</button>
            </p>
        </form>
        <br />
        <h3>Arquivos Auxiliares (Modelos)</h3>
        <p><a href="/arquivos/documentos/Acrescimo_de_Disciplinas.doc" type="arquivo doc">Acréscimo de Disciplinas</a></p>
        <p><a href="/arquivos/documentos/Alteracao_de_Nome.doc" type="arquivo doc">Alteração de Nome</a></p>
        <p><a href="/arquivos/documentos/Aproveitamento_de_Disciplinas.doc" type="arquivo doc">Aproveitamento de Disciplinas</a></p>
        <p><a href="/arquivos/documentos/Atestado_ADM_Geral.doc" type="arquivo doc">Atestado Administração Geral</a></p>
        <p><a href="/arquivos/documentos/Atividades_Complementares_(formulario).doc" type="arquivo doc">Atividades Complementares (Formulário)</a></p>
        <p><a href="/arquivos/documentos/Cancelamento_da_Matricula.doc" type="arquivo doc">Cancelamento de Matrícula</a></p>
        <p><a href="/arquivos/documentos/Devolucaoo_da_Documentacao.doc" type="arquivo doc">Devolução de Documentação</a></p>
        <p><a href="/arquivos/documentos/Escolha_Linha_de_Formacao_2011.docx" type="arquivo doc">Escolha de linha de Formação (2011)</a></p>
        <p><a href="/arquivos/documentos/ESTUDO_DE_CURRICULO_2011.docx" type="arquivo doc">Estudo de Currículo (2011)</a></p>
        <p><a href="/arquivos/documentos/Exercicios_Domiciliares.doc" type="arquivo doc">Exercícios Domiciliares</a></p>
        <p><a href="/arquivos/documentos/Formatura_de_Gabinete.doc" type="arquivo doc">Formatura de Gabinete</a></p>
        <p><a href="/arquivos/documentos/Ingresso_Portador_de_Diploma.doc" type="arquivo doc">Ingresso de Portador de Diploma</a></p>
        <p><a href="/arquivos/documentos/PEDIDO_DE_COLACAO_DE_GRAU_2011.doc" type="arquivo doc">Pedido de Colação de Grau (2011)</a></p>
        <p><a href="/arquivos/documentos/Reingresso_Matricula_Trancada.doc" type="arquivo doc">Reingresso de Matrícula Trancada</a></p>
        <p><a href="/arquivos/documentos/Solicitacao_de_Documentacao_para_transferecia.doc" type="arquivo doc">Solicitação de Documentos para Transferência</a></p>
        <p><a href="/arquivos/documentos/Solicitacao_de_Vaga.doc" type="arquivo doc">Solicitação de Vaga</a></p>
        <p><a href="/arquivos/documentos/Solicitacao_para_cursar_menos_disciplinas.doc" type="arquivo doc">Solicitação para Cursar Menos Disciplinas</a></p>
        <p><a href="/arquivos/documentos/Trancamento_da_Matricula.doc" type="arquivo doc">Trancamento de Matrícula</a></p>
        <p><a href="/arquivos/documentos/Trancamento_de_Disciplinas.doc" type="arquivo doc">Trancamento de Disciplinas</a></p>
        <p><a href="/arquivos/documentos/TRANSFERENCIA.doc" type="arquivo doc">Transferência</a></p>
        <p><a href="/arquivos/documentos/TRANSFERENCIA_2010.doc" type="arquivo doc">Transferência (2010)</a></p>
        <p><a href="/arquivos/documentos/Transferencia_da_Grade_ENF_2011.doc" type="arquivo doc">Transferência de Grade - Enfermagem (2011)</a></p>
        <p><a href="/arquivos/documentos/Transferencia_da_Grade_NUT_2012.doc" type="arquivo doc">Transferência de Grade - Nutrição (2012)</a></p>
        <p><a href="/arquivos/documentos/Transferencia_da_Grade_PP_2012.doc" type="arquivo doc">Transferência de Grade - Publicidade e Propaganda (2012)</a></p>
        <p><a href="/arquivos/documentos/Transferencia_Interna_de_Curso_2011.doc" type="arquivo doc">Transferência Interna de Curso (2011)</a></p>
        <p><a href="/arquivos/documentos/TRANSFERENCIA_liberacao.doc" type="arquivo doc">Transferência de Liberação</a></p>
        <p><a href="/arquivos/documentos/Troca_de_Disciplinas.doc" type="arquivo doc">Troca de Disciplinas</a></p>
    </div>
    {?/if?}
    <div class="box-divisao arquivos">
        <h3>Histórico</h3>
        <h4>Matriculadas</h4>
        {?if $matriculadas ?}
        {?foreach from=$matriculadas item=item?}
        <p><b>[{?$item.codigo?}] {?$item.disciplina?}</b><br />
            Semestre/Ano: {?$item.semestre?}<br />
            Carga Horária/Créditos: {?$item.carga?}h/{?$item.creditos?}</p>
            {?/foreach?}
            {?else?}
        Não encontrada!
        {?/if?}
        <h4>Cursadas</h4>
        {?if $cursadas ?}
        {?foreach from=$cursadas item=item?}
        <p><b>[{?$item.codigo?}] {?$item.disciplina?}</b><br />
            Nota: {?$item.nota?}<br />
            Semestre/Ano: {?$item.semestre?}<br />
            Carga Horária/Créditos: {?$item.carga?}h/{?$item.creditos?}</p>
            {?/foreach?}
            {?else?}
        Não encontrada!
        {?/if?}
        <h4>Não Cursadas</h4>
        {?if $ncursadas ?}
        {?foreach from=$ncursadas item=item?}
        <p><b>[{?$item.codigo?}] {?$item.disciplina?}</b><br />
            Carga Horária/Créditos: {?$item.carga?}h/{?$item.creditos?}</p>
            {?/foreach?}
            {?else?}
        Não encontrada!
        {?/if?}
        <h4>Aproveitadas</h4>
        {?if $aproveitadas ?}
        {?foreach from=$aproveitadas item=item?}
        <p><b>[{?$item.codigo?}] {?$item.disciplina?}</b><br />
            Nota: {?$item.nota?}<br />
            Semestre/Ano: {?$item.semestre?}<br />
            Carga Horária/Créditos: {?$item.carga?}h/{?$item.creditos?}</p>
            {?/foreach?}
            {?else?}
        Não encontrada!
        {?/if?}
    </div>
    <div class="box-divisao arquivos">
        <h3>TRANCAMENTO DE MATRÍCULA</h3>
        <p><b>Taxa</b>: R$ 20,00 (vinte reais)</p>
        <p>O Trancamento da Matrícula não é automático, é obrigatório protocolar solicitação na Secretaria da Faculdade.</p>
        <p>Acadêmicos com contribuições em atraso deverão procurar a tesouraria da Faculdade durante todo o mês de junho para regularizar a situação. <b>NÃO SERÃO FEITOS ACERTOS NA REMATRÍCULA</b>.</p>
    </div>
    <div class="box-divisao arquivos">
        <h3>VALOR DOS CRÉDITOS PARA 2014/1º e 2º Semestre</h3>
        <table width="100%" border="1" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th></th>
                    <th>Valor do Crédito</th>
                    <th>3 disc.</th>
                    <th>4 disc.</th>
                    <th>5 disc.</th>
                    <th>6 disc.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>ADMINISTRAÇÃO</th>
                    <td>R$ 225,00</td>
                    <td>R$ 450,00</td>
                    <td>R$ 600,00</td>
                    <td>R$ 750,00</td>
                    <td>R$ 900,00</td>
                </tr>
                <tr>
                    <th>BIOMEDICINA</th>
                    <td>R$ 278,00</td>
                    <td>R$ 556,00</td>
                    <td>R$ 741,33</td>
                    <td>R$ 926,66</td>
                    <td>R$ 1.112,00</td>
                </tr>
                <tr>
                    <th>CIÊNCIAS CONTÁBEIS</th>
                    <td>R$ 238,00</td>
                    <td>R$ 476,00</td>
                    <td>R$ 634,66</td>
                    <td>R$ 793,33</td>
                    <td>R$ 952,00</td>
                </tr>
                <tr>
                    <th>ENFERMAGEM</th>
                    <td>R$ 356,00</td>
                    <td>R$ 712,00</td>
                    <td>R$ 949,33</td>
                    <td>R$ 1.186,66</td>
                    <td>R$ 1.424,00</td>
                </tr>
                <tr>
                    <th>FISIOTERAPIA</th>
                    <td>R$ 291,00</td>
                    <td>R$ 582,00</td>
                    <td>R$ 776,00</td>
                    <td>R$ 970,00</td>
                    <td>R$ 1.164,00</td>
                </tr>
                <tr>
                    <th>GASTRONOMIA</th>
                    <td>R$ 356,00</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th>NUTRIÇÃO</th>
                    <td>R$ 288,00</td>
                    <td>R$ 576,00</td>
                    <td>R$ 768,00</td>
                    <td>R$ 960,00</td>
                    <td>R$ 1.152,00</td>
                </tr>
                <tr>
                    <th>PUBLICIDADE E PROPAGANDA</th>
                    <td>R$ 251,00</td>
                    <td>R$ 502,00</td>
                    <td>R$ 669,33</td>
                    <td>R$ 836,66</td>
                    <td>R$ 1.004,00 </td>
                </tr>
                <tr>
                    <th>TURISMO</th>
                    <td>R$ 225,00</td>
                    <td>R$ 450,00</td>
                    <td>R$ 600,00</td>
                    <td>R$ 750,00</td>
                    <td>R$ 900,00</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="box-divisao arquivos">
        <h3>Taxas 2014</h3>
        <table width="100%" border="1" cellpadding="0" cellspacing="0">
            <tr>
                <th>Processo Seletivo</th>
                <td>R$ 40,00</td>
            </tr>
            <tr>
                <th>Rematrícula fora do prazo</th>
                <td>R$ 20,00</td>
            </tr>
            <tr>
                <th>Aproveitamento de Disciplina</th>
                <td>R$ 15,00 por disciplina</td>
            </tr>
            <tr>
                <th>Trancamento de Matrícula</th>
                <td>R$ 20,00</td>
            </tr>
            <tr>
                <th>Histórico Escolar</th>
                <td>R$ 25,00</td>
            </tr>
            <tr>
                <th>Atestado</th>
                <td>R$ 2,00</td>
            </tr>
            <tr>
                <th>Averbação de atividades complementares</th>
                <td>R$ 10,00 por documento.</td>
            </tr>
            <tr>
                <th>Bloqueto de Contribuições Sociais (2ª Via)</th>
                <td>R$ 5,00</td>
            </tr>
        </table>
    </div>
</div>
<style>
    table td, table  th{
        padding: 5px;
        text-align: center;
    }
    table tbody th{
        text-align: left;
    }
</style>
{?include file="footer.tpl"?}