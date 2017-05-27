{?include file='header.tpl'?}
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js">
</script>
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.maskedinput-1.2.2.min.js">
</script>
<script type="text/javascript">
$(document).ready(function(){
        $("#cpf").mask("999.999.999-99",{
                placeholder:"_"
        });
        $("#form_confirmacao").validate({
                rules: {
                        cpf: "required",
                        email: {required:true, email:true}
                },
                messages: {
                        cpf: 'Preencha seu CPF!',
                        email: 'Preencha um e-mail valido!'
                }
        });
});
</script>
<div class="box">
    <div class="titulo">
        <h2>Confirmação de Inscrição</h2>
    </div>
    {?if $confirmacao?}
	{?if $confirmacao.pago == 1?}
    <p>Já foi confirmado o pagamento do seu boleto!</p>
	{?else?}
    <p>O pagamento do seu boleto ainda não foi confirmado.</p>
    <p class="alerta warning negrito"><a href="/vestibular/boleto/{?$confirmacao.id?}/" target="_blank">Clique aqui para imprimir o boleto bancário.</a></p>
	{?/if?}
    {?else?}
    <form method="POST" id="form_confirmacao">
        <p><label for="cpf">CPF:</label></p>
        <p><input type="text" name="cpf" id="cpf" class="inpute medio" /></p>
        <p><label for="email">E-mail:</label></p>
        <p><input type="text" name="email" id="email" class="inpute gde" /></p>
        <p><input type="submit" class="botao" value="Enviar" /></p>
    </form>
    <label class="error">{?$alerta?}</label>
    {?/if?}
</div>
{?include file='footer.tpl'?}
