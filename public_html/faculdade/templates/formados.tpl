{?include file="header.tpl"?}
<script src="/_js/jquery-1.7.2.min"></script>
<script src="/_js/jquery-ui-1.8.6.custom.min"></script>
<link rel="stylesheet" href="/_js/ui-lightness/jquery-ui-1.8.6.custom.css" />
<script>
    $(function() {
        $( "#slider" ).slider({
            value:2012,
            min: 1995,
            max: 2012,
            step: 1,
            slide: function(event, ui) {
                $("#amount").val(ui.value);
                atualiza();
            }
        });
        $("#amount").val($("#slider").slider("value"));
        $("#curso").change(function(){
            atualiza();
        });
        atualiza();
    });
    function atualiza(){
        $("#retorno").html('Buscando alunos');
        var ano = $("#amount").attr("value");
        var curso = $("#curso").attr("value");
        $.ajax({
            type: 'POST',
            url: '/formados/resultado',
            data: {ano:ano,curso: curso},
            success: function(data){
                $('#retorno').html(data);
            }
        });
    }
</script>
<style>
    #amount{
        border: 0;
    }
</style>
<div class="titulo">
    <h2>Formados</h2>
</div>
<div class="box-texto">
    <form method="POST">
        <table>
            <tr>
                <td><h3>Curso</h3></td>
                <td>
                    <select id="curso">
                        <option value="ADM">Administração</option>
                        <option value="MK">Administração - Marketing</option>
                        <option value="PD">Administração - Produção</option>
                        <option value="RH">Administração - Recursos Humanos</option>
                        <option value="BIO">Biomedicina</option>
                        <option value="CON">Ciências Contábeis</option>
                        <option value="ENF">Enfermagem</option>
                        <option value="FIS">Fisioterapia</option>
                        <option value="NUT">Nutrição</option>
                        <option value="PUBLI">Publicidade e Propaganda</option>
                        <option value="TUR">Turismo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><h3>Ano</h3></td>
                <td><input type="text" id="amount" /></td>
            </tr>
            <tr>
                <td colspan="2"><div id="slider"></div></td>
            </tr>
        </table>
    </form>
    <div id="retorno"></div>
</div>
{?include file="footer.tpl"?}