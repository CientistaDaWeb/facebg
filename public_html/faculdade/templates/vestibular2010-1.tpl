{?include file="header.tpl"?}
<link rel="stylesheet" type="text/css" media="screen" href="/_css/vestibular2011_estilos.css" />
<script type="text/javascript" src="{?$basePATH?}/_js/jquery.validate.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var obrigatorio = "Campo obrigatório!";
        $("#form_vestibular").validate({
            rules: {
                nome: {
                    required: true
                },
                cidade: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                mensagem: {
                    required: true
                }
            },
            messages: {
                nome: {
                    required: obrigatorio
                },
                cidade: {
                    required: obrigatorio
                },
                email: {
                    required: obrigatorio,
                    email: "Preencha o e-mail corretamente"
                },
                mensagem: {
                    required: obrigatorio
                }
            }
        });
    });
</script>

<div id="vestibular2011">
  <div id="parte1">
    <div id="texto1">Você acredita que atitudes sustentáveis <br />
      podem mudar o mundo?<br />
      Que reciclando o lixo, agredimos menos o planeta?<br />
      E que plantando árvores, <br />
    respiraremos um ar mais puro?</div>
    
    <div id="texto2">Nós acreditamos que além <br />
      de tudo isso, atitudes sustentáveis <br />
    inspiram pessoas!</div>
    
    <div id="texto3">E queremos inspirar você <br />
      a mudar o mundo, <br />
    começando pela sua vida!</div>
  </div>
  <div id="parte2">
    <div id="titVestibular"><img src="../_img/vestibular/vestibular.gif" width="381" height="272" alt="Vestibular 2011" /></div>
    <div id="inscricoes"><img src="../_img/vestibular/inscricoes.gif" width="191" height="110" alt="Inscrições de 26/Out a 03/Dez" /></div>
    <div id="prova"><img src="../_img/vestibular/prova.gif" width="191" height="67" alt="Prova 5/Dez" /></div>
  </div>
  <div id="parte3">
    <div id="tit_cursos"><img src="../_img/vestibular/tit_cursos.gif" width="39" height="164" alt="CURSOS" /></div>
    <div id="cursos1">
      <ul>
            <li><a href="curso/graduacao/administracao">Administração</a></li>
            <ul>Linhas de Formação:
                <li>Recursos Humanos</li>
                <li>Marketing</li>
                <li>Produção</li>
                <li>Finanças e Controladoria</li>
            </ul>
        </ul>    
    </div>
    <div id="cursos2">
      <ul>
            <li><a href="curso/graduacao/enfermagem">Enfermagem</a></li>
            <li><a href="curso/graduacao/fisioterapia">Fisioterapia</a></li>
            <li><a href="curso/graduacao/nutricao">Nutrição</a></li>
            <li><a href="curso/graduacao/publicidade">Publicidade e Propaganda</a></li>
            <li><a href="curso/graduacao/turismo">Turismo</a></li>
        </ul>
    </div>
    <div id="info-outros"> 
            Confira o<br />
        <a href="http://faculdade.cnecbento.com.br/arquivos/EDITAL_PROCESSO_SELETIVO.pdf">Edital deste Processo Seletivo</a><br />
        <br />
        Baixe o<br />
      <a href="http://faculdade.cnecbento.com.br/arquivos/MANUAL_DO_CANDIDATO_2011_1.pdf">Manual do Candidato </a>
    </div>
    <div id="infos"><strong>Taxa de Inscrição:</strong> R$ 25,00 até dia 25/11/2010. 
      Após, R$ 40,00. <br />
      <strong>Locais:</strong> Na sede da Faculdade, no quiosque do Shopping Bento ou ainda por este site<a href="http://www.cnecbento.com.br"></a>. <br />
      <br />
    Além de participar do PROUNI e FIES, a Instituição possui sistema de Bolsa de Estudos próprio, com inscrições até 25/11/2010.<br />
    Confira
    mais informações aqui: <a href="http://faculdade.cnecbento.com.br/bolsas-de-estudo">http://faculdade.cnecbento.com.br/bolsas-de-estudo</a>.</div>
    <div id="logoFaculdade"><img src="../_img/vestibular/logo_faculdade.gif" width="300" height="91" alt="Faculdade Cenecista de Bento Gonçalves" /></div>
    <div id="endFaculdade">Dúvidas? Escreva para: <a href="mailto:secretaria@cnecbento.com.br">secretaria@cnecbento.com.br</a><br />
      <br />
      Complexo de Ensino Cenecista - CNEC Bento<br />
      Rua Arlindo Franklin Barbosa, 460 - Bairro São Roque<br />
      Bento Gonçalves - RS - Fone: (54) 3452 4422
    </div>

  </div>
</div>
{?include file="footer.tpl"?}