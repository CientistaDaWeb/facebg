<?php
//=========Dados Obrigatórios para gerar o Boleto
$entra["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto (DD/MM/AAAA)
$entra["data_documento"] = date('d/m/Y'); // Data de emissão do Boleto (DD/MM/AAAA)
$entra["valor"] = $valor_boleto;         // Valor do Boleto (Utilizar virgula como separador decimal, não use pontos)
$entra["nosso_numero"] = date('Y').substr('0000000'.$boleto['num_doc'],-4);         // Nosso Numero maximo de 8 digitos
$entra["numero_documento"] = $boleto['num_doc'];        // Numero do Pedido ou Nosso Numero
$entra["carteira"] = "2";  // Código da Carteira 1 = Carteira Escritural  ou 2 = Carteira CCB
//============Dados da Agência e Conta =========
$entra["agencia"] = "0130";         // Numero da Agência s/ digito e sem ponto
$entra["dac_agencia"] = "00";          // Digitos Agência sem ponto
$entra["conta"] = "8592740";        // Numero da Conta p/ Carteira Escritural "OU" Código do Cliente para carteira CCB (sem digito e sem ponto)
$entra["dac_conta"] = "14";        // Digito da Conta p/ Carteira Escritural "OU" Código do Cliente para carteira CCB
//=============Dados do Cedente ===============
$entra["cpf_cnpj_cedente"] = "33.621.384/0725-35"; // CPF OU CNPJ Cedente
$entra["endereco"] = "Rua Arlindo Franklin Barbosa, 460 - São Roque";                                                                 // Enderço do cedente
$entra["cidade"] = "Bento Gonçalves - RS - CEP 95700-000";                                                                                 // Cidade do cedente
$entra["cedente"] = "CAMPANHA NACIONAL DE ESCOLAS DA COMUNIDADE";                                                                         // Nome do cedente
//===Dados do seu Cliente (Opcional)===============
$entra["sacado"] = $boleto['nome']; // nome do Sacado (Seu cliente)
$entra["endereco1"] = $boleto['endereco']; // Endereço linha
$entra["endereco2"] = $boleto['cidade'] . " - " . $boleto['uf'] . " -  CEP: " . $boleto['cep']; // Endereço linha
//==Os Campos Abaixo são Opcionais=================
$entra["instrucoes"] = "- Sr. Caixa, não receber após o vencimento"; //Instruçoes para o Cliente
$entra["instrucoes1"] = "- Em caso de dúvidas entre em contato conosco: (54) 3452.4422"; // Por exemplo "Não receber apos o vencimento" ou "Cobrar Multa de 1% ao mês"
$entra["instrucoes2"] = "";
$entra["instrucoes3"] = "";
$entra["instrucoes4"] = "";
$entra["instrucoes5"] = "";

$entra["data_processamento"] = date('d/m/Y');
$entra["quantidade"] = "";
$entra["valor_unitario"] = "";
$entra["especie"] = "R$";
$entra["especie_doc"] = "DS";
$entra["aceite"] = "N";
$entra["uso_banco"] = "";
//==================================================================
//============================Não mude o valores abaixo=============

require_once("../includes/funcoes_banrisul.php");
$b = new boleto();
$b->banco_banrisul($entra);
?>
<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <head>
    <tile>Complexo Cenecista - Boleto Banrisul - Inscrição Vestibular</tile>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        <!--
        .cp { font: bold 10px Arial; color: black }
        .ti { font: 9px Arial, Helvetica, sans-serif }
        .ld { font: bold 15px Arial; color: #000000 }
        .ct { FONT: 9px "Arial Narrow"; COLOR: #000033 }
        .cn { FONT: 9px Arial; COLOR: black }
        .bc { font: bold 22px Arial; color: #000000 }
        -->
    </style>
</head>
<body text="#000000" bgColor="#ffffff" topMargin="0" rightMargin="0" onload="window.print()">
    <table width="666" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td valign="top" class="cp">
                <div align="center">Instruções de Impressão</div>
            </td>
        </tr>
        <tr>
            <td valign="top" class="ti">
                <div align="center">Imprimir em impressora jato de tinta (ink jet) ou laser em qualidade normal. (Não use modo econômico).<br />
                    Utilize folha A4 (210 x 297 mm) ou Carta (216 x 279 mm) - Corte na linha indicada<br />
                </div>
            </td>
        </tr>
    </table>
    <br />
    <table cellspacing="0" cellpadding="0" width="666" border="0">
        <tbody>
            <tr>
                <td class="ct" width="666"><img height="1" src="/_img/boleto_banrisul/6.gif" width=665 border="0"></td>
            </tr>
            <tr>
                <td class="ct" width="666">
                    <div align=right><b class="cp">Recibo do Sacado</b></div>
                </td>
            </tr>
        </tbody>
    </table>
    <table width="666" cellspacing=5 cellpadding="0" border="0">
        <tr>
            <td width=41></td>
        </tr>
    </table>
    <table width="666" cellspacing=5 cellpadding="0" border="0" align=Default>
        <tr>
            <td class="ti" width=455><? echo $entra["cedente"]; ?><br /> <? echo $entra["endereco"]; ?><br />
                <? echo $entra["cidade"]; ?><br /> <br />

            </td>
            <td align=right width=150 class="ti">
                <div align=right></div>
            </td>
        </tr>
    </table>
    <br />
    <table cellspacing="0" cellpadding="0" width=661 border="0">
        <tbody>
            <tr>
                <td class="cp" width=151>
                    <div align=left class="ld">
                        <div align="center"><img
                                src="/_img/boleto_banrisul/logo-banrisul.gif" width="150"
                                height="40"></div>
                    </div>
                </td>
                <td width=3 valign=bottom><img height=22
                                               src=/_img/boleto_banrisul/3.gif width=2 border="0"></td>
                <td class="cp"t width=67 valign=bottom>
                    <div align=center><font class=bc>041-8</font></div>
                </td>
                <td width=2 valign=bottom><img height=22
                                               src=/_img/boleto_banrisul/3.gif width=2 border="0"></td>
                <td class=ld align=right width=443 valign=bottom><span class=ld> <?= $entra["linha_digitavel"] ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></td>
            </tr>
            <tr>
                <td colspan=5><img height=2 src=/_img/boleto_banrisul/2.gif width="666"
                                   border="0"></td>
            </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=298 height="1"3>Cedente</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=126 height="1"3>Agência/Código do Cedente</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=34 height="1"3>Espécie</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=53 height="1"3>Quantidade</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=120 height="1"3>Nosso número</td>
            </tr>
            <tr>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" width=298 height="1"2><?= $entra["cedente"] ?></td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" width=126 height="1"2><?= $entra["agencia_codigo"] ?>
                </td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" width=34 height="1"2><?= $entra["especie"] ?></td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" width=53 height="1"2><?= $entra["quantidade"] ?>
                </td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" align=right width=120 height="1"2><?= $entra["nosso_numero"] ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=298 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=298 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=126 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=126 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=34 height="1"><img height="1"
                                                        src=/_img/boleto_banrisul/2.gif width=34 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=53 height="1"><img height="1"
                                                        src=/_img/boleto_banrisul/2.gif width=53 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=120 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=120 border="0"></td>
            </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" colspan=3 height="1"3>Número do documento</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=132 height="1"3>CPF/CNPJ</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=134 height="1"3>Vencimento</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=180 height="1"3>Valor documento</td>
            </tr>
            <tr>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" colspan=3 height="1"2><?= $entra["numero_documento"] ?>
                </td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" width=132 height="1"2><?= $entra["cpf_cnpj_cedente"] ?>
                </td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" width=134 height="1"2><?= $entra["data_vencimento"] ?>
                </td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" align=right width=180 height="1"2><?= $entra["valor"] ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=113 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=113 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=72 height="1"><img height="1"
                                                        src=/_img/boleto_banrisul/2.gif width=72 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=132 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=132 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=134 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=134 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=180 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
            </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=113 height="1"3>(-) Desconto /
                    Abatimentos</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=112 height="1"3>(-) Outras deduções</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=113 height="1"3>(+) Mora / Multa</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=113 height="1"3>(+) Outros acréscimos</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=180 height="1"3>(=) Valor cobrado</td>
            </tr>
            <tr>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" align=right width=113 height="1"2></td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" align=right width=112 height="1"2></td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" align=right width=113 height="1"2></td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" align=right width=113 height="1"2></td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" align=right width=180 height="1"2></td>
            </tr>
            <tr>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=113 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=113 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=112 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=112 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=113 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=113 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=113 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=113 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=180 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
            </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=659 height="1"3>Sacado</td>
            </tr>
            <tr>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" width=659 height="1"2><?= $entra["sacado"] ?></td>
            </tr>
            <tr>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=659 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=659 border="0"></td>
            </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td class="ct" width=7 height="1"2></td>
                <td class="ct" width=524>Instruções</td>
                <td class="ct" width=12 height="1"2></td>
                <td class="ct" width=123>Autenticação mecânica</td>
            </tr>
            <tr>
                <td width=7></td>
                <td width=524></td>
                <td width=12></td>
                <td width=123></td>
            </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" width="666" border="0">
        <tbody>
            <tr>
                <td width=7></td>
                <td width=500 class="cp"><?= $entra["instrucoes"] ?></td>
                <td width=159></td>
            </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" width="666" border="0">
        <tr>
            <td class="ct" width="666"></td>
        </tr>
        <tbody>
            <tr>
                <td class="ct" width="666">
                    <div align=right>Corte na linha pontilhada<span class="cp">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="cp">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
                </td>
            </tr>
            <tr>
                <td class="ct" width="666"><img height="1" src="/_img/boleto_banrisul/6.gif"
                                            width=665 border="0"></td>
            </tr>
        </tbody>
    </table>
    <br /><br />
    <table cellspacing="0" cellpadding="0" width=664 border="0">
        <tbody>
            <tr>
                <td class="cp" width=151>
                    <div align=left class="ld">
                        <div align="center"><img
                                src="/_img/boleto_banrisul/logo-banrisul.gif" width="150"
                                height="40"></div>
                    </div>
                </td>
                <td width=3 valign=bottom><img height=22
                                               src=/_img/boleto_banrisul/3.gif width=2 border="0"></td>
                <td class="cp"t width=65 valign=bottom>
                    <div align=center><font class=bc>041-8</font></div>
                </td>
                <td width=3 valign=bottom><img height=22
                                               src=/_img/boleto_banrisul/3.gif width=2 border="0"></td>
                <td class=ld align=right width=445 valign=bottom><span class=ld> <?= $entra["linha_digitavel"] ?>
                        <span class="cp"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> </span></td>
            </tr>
            <tr>
                <td colspan=5><img height=2 src=/_img/boleto_banrisul/2.gif width="666"
                                   border="0"></td>
            </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=472 height="1"3>Local de pagamento</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=180 height="1"3>Vencimento</td>
            </tr>
            <tr>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"5
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" width=472 height="1"2>Rede bancaria.
                    Ap&oacute;s o vencimento, apenas no Barinsul</td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"5
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" align=right width=180 height="1"2><?= $entra["data_vencimento"] ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=472 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=472 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=180 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
            </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=472 height="1"3>Cedente</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=180 height="1"3>Agência/Código cedente</td>
            </tr>
            <tr>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" width=472 height="1"2><?= $entra["cedente"] ?></td>
                <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                   src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="cp" valign="top" align=right width=180 height="1"2><?= $entra["agencia_codigo"] ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=472 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=472 border="0"></td>
                <td valign="top" width=7 height="1"><img height="1"
                                                       src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                <td valign="top" width=180 height="1"><img height="1"
                                                         src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
            </tr>
        </tbody>
    </table>
    <table cellspacing="0" cellpadding="0" border="0">
        <tbody>
            <tr>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=113 height="1"3>Data do documento</td>
                <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                 src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                <td class="ct" valign="top" width=163 height="1"3>N<u>o</u> documento</td>
    <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                     src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
    <td class="ct" valign="top" width=62 height="1"3>Espécie doc.</td>
    <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                     src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
    <td class="ct" valign="top" width=34 height="1"3>Aceite</td>
    <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                     src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
    <td class="ct" valign="top" width=72 height="1"3>Data proces.</td>
    <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                     src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
    <td class="ct" valign="top" width=180 height="1"3>Nosso número</td>
</tr>
<tr>
    <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                       src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
    <td class="cp" valign="top" width=113 height="1"2>
        <div align=left><?= $entra["data_documento"] ?></div>
    </td>
    <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                       src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
    <td class="cp" valign="top" width=163 height="1"2><?= $entra["numero_documento"] ?>
    </td>
    <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                       src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
    <td class="cp" valign="top" width=62 height="1"2>
        <div align=left><?= $entra["especie_doc"] ?></div>
    </td>
    <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                       src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
    <td class="cp" valign="top" width=34 height="1"2>
        <div align=left><?= $entra["aceite"] ?></div>
    </td>
    <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                       src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
    <td class="cp" valign="top" width=72 height="1"2>
        <div align=left><?= $entra["data_processamento"] ?></div>
    </td>
    <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                       src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
    <td class="cp" valign="top" align=right width=180 height="1"2><?= $entra["nosso_numero"] ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
    <td valign="top" width=7 height="1"><img height="1"
                                           src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
    <td valign="top" width=113 height="1"><img height="1"
                                             src=/_img/boleto_banrisul/2.gif width=113 border="0"></td>
    <td valign="top" width=7 height="1"><img height="1"
                                           src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
    <td valign="top" width=163 height="1"><img height="1"
                                             src=/_img/boleto_banrisul/2.gif width=163 border="0"></td>
    <td valign="top" width=7 height="1"><img height="1"
                                           src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
    <td valign="top" width=62 height="1"><img height="1"
                                            src=/_img/boleto_banrisul/2.gif width=62 border="0"></td>
    <td valign="top" width=7 height="1"><img height="1"
                                           src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
    <td valign="top" width=34 height="1"><img height="1"
                                            src=/_img/boleto_banrisul/2.gif width=34 border="0"></td>
    <td valign="top" width=7 height="1"><img height="1"
                                           src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
    <td valign="top" width=72 height="1"><img height="1"
                                            src=/_img/boleto_banrisul/2.gif width=72 border="0"></td>
    <td valign="top" width=7 height="1"><img height="1"
                                           src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
    <td valign="top" width=180 height="1"><img height="1"
                                             src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
</tr>
</tbody>
</table>
<table cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="ct" valign="top" COLSPAN="3" height="1"3>Uso do banco</td>
            <td class="ct" valign="top" height="1"3 width=7><img height="1"3
                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="ct" valign="top" width=83 height="1"3>Carteira</td>
            <td class="ct" valign="top" height="1"3 width=7><img height="1"3
                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="ct" valign="top" width=53 height="1"3>Espécie</td>
            <td class="ct" valign="top" height="1"3 width=7><img height="1"3
                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="ct" valign="top" width=123 height="1"3>Quantidade</td>
            <td class="ct" valign="top" height="1"3 width=7><img height="1"3
                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="ct" valign="top" width=72 height="1"3>Valor</td>
            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="ct" valign="top" width=180 height="1"3>(=) Valor documento</td>
        </tr>
        <tr>
            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td valign="top" class="cp" height="1"2 COLSPAN="3">
                <div align=left><?= $entra["uso_banco"] ?></div>
            </td>
            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="cp" valign="top" width=83>
                <div align=left><?= $entra["carteira"] ?></div>
            </td>
            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="cp" valign="top" width=53>
                <div align=left><?= $entra["especie"] ?></div>
            </td>
            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="cp" valign="top" width=123><?= $entra["quantidade"] ?></td>
            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="cp" valign="top" width=72><?= $entra["valor_unitario"] ?></td>
            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="cp" valign="top" align=right width=180 height="1"2><?= $entra["valor"] ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td valign="top" width=7 height="1"><img height="1"
                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
            <td valign="top" width=7 height="1"><img height="1"
                                                   src=/_img/boleto_banrisul/2.gif width=75 border="0"></td>
            <td valign="top" width=7 height="1"><img height="1"
                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
            <td valign="top" width=31 height="1"><img height="1"
                                                    src=/_img/boleto_banrisul/2.gif width=31 border="0"></td>
            <td valign="top" width=7 height="1"><img height="1"
                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
            <td valign="top" width=83 height="1"><img height="1"
                                                    src=/_img/boleto_banrisul/2.gif width=83 border="0"></td>
            <td valign="top" width=7 height="1"><img height="1"
                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
            <td valign="top" width=53 height="1"><img height="1"
                                                    src=/_img/boleto_banrisul/2.gif width=53 border="0"></td>
            <td valign="top" width=7 height="1"><img height="1"
                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
            <td valign="top" width=123 height="1"><img height="1"
                                                     src=/_img/boleto_banrisul/2.gif width=123 border="0"></td>
            <td valign="top" width=7 height="1"><img height="1"
                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
            <td valign="top" width=72 height="1"><img height="1"
                                                    src=/_img/boleto_banrisul/2.gif width=72 border="0"></td>
            <td valign="top" width=7 height="1"><img height="1"
                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
            <td valign="top" width=180 height="1"><img height="1"
                                                     src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
        </tr>
    </tbody>
</table>
<table cellspacing="0" cellpadding="0" width="666" border="0">
    <tbody>
        <tr>
            <td align=right width=10>
                <table cellspacing="0" cellpadding="0" border="0" align=left>
                    <tbody>
                        <tr>
                            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                        </tr>
                        <tr>
                            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                        </tr>
                        <tr>
                            <td valign="top" width=7 height="1"><img height="1"
                                                                   src=/_img/boleto_banrisul/2.gif width=1 border="0"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td valign="top" width=468 rowspan=5><font class="ct">Instruções (Texto
                de responsabilidade do cedente)</font><br /><span class="cp"> <? echo $entra["instrucoes1"]; ?><br />
                    <? echo $entra["instrucoes2"]; ?><br /> <? echo $entra["instrucoes3"]; ?><br />
                    <? echo $entra["instrucoes4"]; ?><br /> <? echo $entra["instrucoes5"]; ?><br />

                </span>

            </td>
            <td align=right width=188>
                <table cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                            <td class="ct" valign="top" width=180 height="1"3>(-) Desconto /
                                Abatimentos</td>
                        </tr>
                        <tr>
                            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                            <td class="cp" valign="top" align=right width=180 height="1"2></td>
                        </tr>
                        <tr>
                            <td valign="top" width=7 height="1"><img height="1"
                                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                            <td valign="top" width=180 height="1"><img height="1"
                                                                     src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align=right width=10>
                <table cellspacing="0" cellpadding="0" border="0" align=left>
                    <tbody>
                        <tr>
                            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                        </tr>
                        <tr>
                            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                        </tr>
                        <tr>
                            <td valign="top" width=7 height="1"><img height="1"
                                                                   src=/_img/boleto_banrisul/2.gif width=1 border="0"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td align=right width=188>
                <table cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                            <td class="ct" valign="top" width=180 height="1"3>(-) Outras deduções</td>
                        </tr>
                        <tr>
                            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                            <td class="cp" valign="top" align=right width=180 height="1"2></td>
                        </tr>
                        <tr>
                            <td valign="top" width=7 height="1"><img height="1"
                                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                            <td valign="top" width=180 height="1"><img height="1"
                                                                     src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align=right width=10>
                <table cellspacing="0" cellpadding="0" border="0" align=left>
                    <tbody>
                        <tr>
                            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                        </tr>
                        <tr>
                            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                        </tr>
                        <tr>
                            <td valign="top" width=7 height="1"><img height="1"
                                                                   src=/_img/boleto_banrisul/2.gif width=1 border="0"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td align=right width=188>
                <table cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                            <td class="ct" valign="top" width=180 height="1"3>(+) Mora / Multa</td>
                        </tr>
                        <tr>
                            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                            <td class="cp" valign="top" align=right width=180 height="1"2></td>
                        </tr>
                        <tr>
                            <td valign="top" width=7 height="1"><img height="1"
                                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                            <td valign="top" width=180 height="1"><img height="1"
                                                                     src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align=right width=10>
                <table cellspacing="0" cellpadding="0" border="0" align=left>
                    <tbody>
                        <tr>
                            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                        </tr>
                        <tr>
                            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                        </tr>
                        <tr>
                            <td valign="top" width=7 height="1"><img height="1"
                                                                   src=/_img/boleto_banrisul/2.gif width=1 border="0"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td align=right width=188>
                <table cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                            <td class="ct" valign="top" width=180 height="1"3>(+) Outros acréscimos</td>
                        </tr>
                        <tr>
                            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                            <td class="cp" valign="top" align=right width=180 height="1"2></td>
                        </tr>
                        <tr>
                            <td valign="top" width=7 height="1"><img height="1"
                                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
                            <td valign="top" width=180 height="1"><img height="1"
                                                                     src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td align=right width=10>
                <table cellspacing="0" cellpadding="0" border="0" align=left>
                    <tbody>
                        <tr>
                            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                        </tr>
                        <tr>
                            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td align=right width=188>
                <table cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                            <td class="ct" valign="top" width=180 height="1"3>(=) Valor cobrado</td>
                        </tr>
                        <tr>
                            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
                            <td class="cp" valign="top" align=right width=180 height="1"2></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<table cellspacing="0" cellpadding="0" width="666" border="0">
    <tbody>
        <tr>
            <td valign="top" width="666" height="1"><img height="1"
                                                     src=/_img/boleto_banrisul/2.gif width="666" border="0"></td>
        </tr>
    </tbody>
</table>
<table cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="ct" valign="top" width=659 height="1"3>Sacado</td>
        </tr>
        <tr>
            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="cp" valign="top" width=659 height="1"2><?= $entra["sacado"] ?></td>
        </tr>
    </tbody>
</table>
<table cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td class="cp" valign="top" width=7 height="1"2><img height="1"2
                                                               src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="cp" valign="top" width=659 height="1"2><?= $entra["endereco1"] ?>
            </td>
        </tr>
    </tbody>
</table>
<table cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="cp" valign="top" width=472 height="1"3><?= $entra["endereco2"] ?>
            </td>
            <td class="ct" valign="top" width=7 height="1"3><img height="1"3
                                                             src=/_img/boleto_banrisul/1.gif width=1 border="0"></td>
            <td class="ct" valign="top" width=180 height="1"3>Cód. baixa</td>
        </tr>
        <tr>
            <td valign="top" width=7 height="1"><img height="1"
                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
            <td valign="top" width=472 height="1"><img height="1"
                                                     src=/_img/boleto_banrisul/2.gif width=472 border="0"></td>
            <td valign="top" width=7 height="1"><img height="1"
                                                   src=/_img/boleto_banrisul/2.gif width=7 border="0"></td>
            <td valign="top" width=180 height="1"><img height="1"
                                                     src=/_img/boleto_banrisul/2.gif width=180 border="0"></td>
        </tr>
    </tbody>
</table>
<TABLE cellspacing="0" cellpadding="0" border="0" width="666">
    <tbody>
        <tr>
            <td class="ct" width=7 height="1"2></td>
            <td class="ct" width=409>Sacador/Avalista</td>
            <td class="ct" width=250>
                <div align=right>Autenticação mecânica - <b class="cp">Ficha de
                        Compensação &nbsp;&nbsp;&nbsp;&nbsp;</b><b class="cp">&nbsp;&nbsp; </b><span
                        class="cp"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
            </td>
        </tr>
        <tr>
            <td class="ct" colspan=3></td>
        </tr>
    </tbody>
</table>
<TABLE cellspacing="0" cellpadding="0" width="666" border="0">
    <tbody>
        <tr>
            <td vAlign=bottom align=left height=50><? fbarcode($entra["codigo_barras"]); ?>
            </td>
        </tr>
    </tbody>
</table>
<TABLE cellspacing="0" cellpadding="0" width="666" border="0">
    <tr>
        <td class="ct" width="666"></td>
    </tr>
    <tbody>
        <tr>
            <td class="ct" width="666">
                <div align=right>Corte na linha pontilhada<span class="cp">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="cp">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>
            </td>
        </tr>
        <tr>
            <td class="ct" width="666"><img height="1" src="/_img/boleto_banrisul/6.gif"
                                        width=665 border="0"></td>
        </tr>
    </tbody>
</table>
<br />

</body>
</HTML>
