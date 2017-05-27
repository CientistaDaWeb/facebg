{?include file="header.tpl"?}
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js">
</script>
<script type="text/javascript">
 $(document).ready(function(){
        var obrigatorio = "Campo obrigatório!";
          $("#lembrarSenha").validate({
            rules: {
                matricula: {
                    required: true
                }                
            },
            messages: {
                matricula: {
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
    {?if $alert_msg?}
    <p class="error">{?$alert_msg?}</p>
    {?else?}
    <h3>Gerar senha nova!</h3>
    <form method="POST" id="lembrarSenha">
        <p><label for="matricula">Matrícula:</label></p>
        <p><input type="text" name="matricula" id="matricula" class="inpute gde" /></p>
        <p><label for="email">Email:</label></p>
        <p><input type="text" name="email" id="email" class="inpute gde" /></p>
        <p>
            <button type="submit">
                Enviar
            </button>
        </p>
    </form>
    {?/if?}
</div>
{?include file="footer.tpl"?}