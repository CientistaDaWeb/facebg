{?include file="header.tpl"?}
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js">
</script>
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.maskedinput-1.2.2.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var obrigatorio = "Campo obrigatório!";
        $("#form_inscricao").validate({
            rules: {
                nome: {
                    required: true
                },
            },
            messages: {
                nome: {
                    required: obrigatorio
                },
            }
        });
    });
</script>
<div class="box">
    <div class="titulo">
        <h2>Inscrição Centro Acadêmico</h2>
    </div>
    {?if $temp_msg?}
    <p class="error">{?$temp_msg?}</p>
    {?else?}
    <h3>EDITAL DE ELEIÇÃO PARA O CENTRO ACADÊMICO DO CURSO DE CIÊNCIAS CONTÁBEIS DA FACULDADE CENECISTA DE BENTO GONÇALVES – FACEBG.</h3>
    <p>Inicia-se em 12/05/2014, o período de inscrição de chapas para a eleição do Centro Acadêmico do curso de Ciências Contábeis. O processo de inscrição das chapas e de candidatos a representantes encerra-se dia 23/05/2014. As chapas deverão ter no mínimo três (3) integrantes oficiais, sendo preenchidos os cargos mínimos de Presidente, Secretário Geral e Tesoureiro. Todos os integrantes devem estar regularmente matriculados no curso de Ciências Contábeis da Faculdade Cenecista de Bento Gonçalves – FACEBG, independente do semestre cursado. As eleições se darão nos dias 02 e 03 de junho de 2014 na sala do Diretório Central da Faculdade Cenecista de Bento Gonçalves – FACEBG. Todos os estudantes regularmente matriculados no curso de Ciências Contábeis terão o direito de votar. As inscrições das chapas e seus devidos representantes poderão ser feitas diretamente no site.</p>
    <form id="form_inscricao" method="post">
        <p>
            <label for="nome">
                Nome:
            </label>
        </p>
        <p>
            <input id="nome" name="nome" type="text" class="inpute gde" />
        </p>
        <p>
            <button type="submit">
                Enviar
            </button>
        </p>
    </form>
    {?/if?}
</div>
{?include file="footer.tpl"?}