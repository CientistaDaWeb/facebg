{?include file='header.tpl'?}
<div class="box">
    {?if $cadastrou?}
    <div class="titulo">
        <h2>Formulário de Inscrição do Candidato</h2>
    </div>
    <h3>Etapa 3 de 3 - Impressão do Boleto Bancário</h3>
    <p>Seus dados foram registrados com sucesso. Para efetivar sua inscrição, imprima o boleto bancário e efetue o pagamento no Banco Banrisul ou em um terminal de auto-atendimento. Dentro de até 24 horas você receberá um e-mail contendo a confirmação da sua inscrição e um link adicional para a impressão do boleto, caso você não possa imprimir agora.</p>
    <h3>IMPORTANTE:</h3>
    <p>Data do vestibular: <span class="negrito">{?$vestibular.data|date_format:"%d/%m/%Y"?}</span></p>
    <p>Horário: <span class="negrito">19:00 Hs (candidatos devem comparecer com mínimo 30min de antecedência)</span>.</p>
    <p>Documentação: <span class="negrito">Candidatos inscritos pela internet devem trazer RG (Cópia e original) e histórico de conclusão de ensino médio(Cópia).</span></p>
    <p><a href="/vestibular/boleto/{?$id?}" target="_blank">Clique aqui para imprimir o boleto bancário.</a></p>
    <p>Caso você não receba este e-mail ou deseje que ele seja enviado novamente, você pode solicitar um reenvio em <a href="/vestibular/confirmacao-inscricao">Vestibular - Confirmação de Inscrição</a>.</p>
    {?else?}
    <p>Já existe um cadastro com esse CPF, você pode verificar o status da sua inscrição em <a href="/vestibular/confirmacao-inscricao">Vestibular - Confirmação de Inscrição</a>!</p>
    {?/if?}
</div>
{?include file='footer.tpl'?}
