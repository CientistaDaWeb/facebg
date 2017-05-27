<?php
class boleto
{

function banco_banrisul(&$V0842f867){
 $V4ab10179 = "041";
$V92f52e6e = "9";
$V540e4d39 = $this->F540e4d39($V0842f867["data_vencimento"]);
$V01773a8a = $this->F6266027b($V0842f867["valor"],10,"0","v");
$Veec38a6d = "1"; # Constante
 $Va387f91c = "041"; # Constante 2
 $V5b3b7abe = $this->F6266027b($V0842f867["nosso_numero"],8,"0","e");
$Vef0ad7ba = $this->F6266027b($V0842f867["conta"],7,"0");
$V9f808afd = $this->F6266027b($V0842f867["agencia"],3,"0");
$V819c2a72 = $this->F6266027b($V0842f867["dac_conta"],2,"0","e");
$V7939648e = $this->F6266027b($V0842f867["dac_agencia"],2,"0","e");

 if($V0842f867["carteira"]=="1"){
 $V401281b0 = "1"; # Emiss�o pelo cliente 1 = scritural
 $V0842f867["carteira"] = "Escritural";
}elseif($V0842f867["carteira"]=="2"){
 $V401281b0 = "2"; # Emiss�o pelo cliente 1 = scritural
 $V0842f867["carteira"] = "CCB";
}else{
 die("C�digo da carteira invalido! Utilize '1' ou '2' ---- 2 = Carteira Escritural ou 2 = Carteira CCB");
}
$V574f61ed = "$V401281b0$Veec38a6d$V9f808afd$Vef0ad7ba$V5b3b7abe$Va387f91c";
$V574f61ed = $V574f61ed . $this->F2c3af95d($V574f61ed);

 $Vc21a9e1d = "$V4ab10179$V92f52e6e$V540e4d39$V01773a8a$V574f61ed";

 $V28dfab58 = $this->F80457cf3($Vc21a9e1d);
$Vc21a9e1d = "$V4ab10179$V92f52e6e$V28dfab58$V540e4d39$V01773a8a$V574f61ed";
$Vaf2c4191 = $V9f808afd .".". $V7939648e . " " . substr($Vef0ad7ba,0,6) .".". substr($Vef0ad7ba,6,1) .".". $V819c2a72;
$V1c90f9c3 = $this->F2c3af95d($V5b3b7abe);

 $V0842f867["codigo_barras"] = "$Vc21a9e1d";
$V0842f867["linha_digitavel"] = $this->F5aef63b6($Vc21a9e1d);
 $V0842f867["agencia_codigo"] = $Vaf2c4191 ;
$V0842f867["nosso_numero"] = $V5b3b7abe .".". $V1c90f9c3;
}

 function F80457cf3($V0842f867){
 $V0842f867 = $this->F11efdac1($V0842f867);
if($V0842f867==0 || $V0842f867 >9) $V0842f867 = 1;
return $V0842f867;
}

 function F540e4d39($V0842f867){
 $V0842f867 = str_replace("/","-",$V0842f867);
$V465b1f70 = explode("-",$V0842f867);
return $this->F1b261b5c($V465b1f70[2], $V465b1f70[1], $V465b1f70[0]);
}

 function F1b261b5c($Vbde9dee6, $Vd2db8a61, $V465b1f70)
 {
 return(abs(($this->F5a66daf8("1997","10","07")) - ($this->F5a66daf8($Vbde9dee6, $Vd2db8a61, $V465b1f70))));
}
function F5a66daf8($V84cdc76c,$V7436f942,$V628b7db0)
 {
 $V151aa009 = substr($V84cdc76c, 0, 2);
$V84cdc76c = substr($V84cdc76c, 2, 2);
if ($V7436f942 > 2) {
 $V7436f942 -= 3;
} else {
 $V7436f942 += 9;
if ($V84cdc76c) {
 $V84cdc76c--;
} else {
 $V84cdc76c = 99;
$V151aa009 --;
}
}
return ( floor(( 146097 * $V151aa009) / 4 ) +
 floor(( 1461 * $V84cdc76c) / 4 ) +
 floor(( 153 * $V7436f942 + 2) / 5 ) +
 $V628b7db0 + 1721119);
}
function F11efdac1($V0fc3cfbc, $V593616de=9, $V4b43b0ae=0)
 {
 $V15a00ab3 = 0;
$V44f7e37e = 2;

 for ($V865c0c0b = strlen($V0fc3cfbc); $V865c0c0b > 0; $V865c0c0b--) {

 $V5e8b750e[$V865c0c0b] = substr($V0fc3cfbc,$V865c0c0b-1,1);

 $Vb040904b[$V865c0c0b] = $V5e8b750e[$V865c0c0b] * $V44f7e37e;

 $V15a00ab3 += $Vb040904b[$V865c0c0b];
if ($V44f7e37e == $V593616de) {

 $V44f7e37e = 1;
}
$V44f7e37e++;
}

 if ($V4b43b0ae == 0) {
 $V15a00ab3 *= 10;
$V05fbaf7e = $V15a00ab3 % 11;
if ($V05fbaf7e == 10) {
 $V05fbaf7e = 0;
}
return $V05fbaf7e;
} elseif ($V4b43b0ae == 1){
 $V9c6350b0 = $V15a00ab3 % 11;
return $V9c6350b0;
}
}
function Fd1ea9d43($V0fc3cfbc)
 {
 $V4ec61c61 = 0;
$V44f7e37e = 2;

 for ($V865c0c0b = strlen($V0fc3cfbc); $V865c0c0b > 0; $V865c0c0b--) {

 $V5e8b750e[$V865c0c0b] = substr($V0fc3cfbc,$V865c0c0b-1,1);

 $Vee487e79[$V865c0c0b] = $V5e8b750e[$V865c0c0b] * $V44f7e37e;

 $V4ec61c61 .= $Vee487e79[$V865c0c0b];
if ($V44f7e37e == 2) {
 $V44f7e37e = 1;
} else {
 $V44f7e37e = 2;
 }
}
$V15a00ab3 = 0;

 for ($V865c0c0b = strlen($V4ec61c61); $V865c0c0b > 0; $V865c0c0b--) {
 $V5e8b750e[$V865c0c0b] = substr($V4ec61c61,$V865c0c0b-1,1);
$V15a00ab3 += $V5e8b750e[$V865c0c0b];
 }
$V9c6350b0 = $V15a00ab3 % 10;
$V05fbaf7e = 10 - $V9c6350b0;
if ($V9c6350b0 == 0) {
 $V05fbaf7e = 0;
}
return $V05fbaf7e;
}
function F5aef63b6($V41ef8940)
 {


 $Vec6ef230 = substr($V41ef8940, 0, 4);
$V1d665b9b = substr($V41ef8940, 19, 5);
$V7bc3ca68 = $this->Fd1ea9d43("$Vec6ef230$V1d665b9b");
$V13207e3d = "$Vec6ef230$V1d665b9b$V7bc3ca68";
$Ved92eff8 = substr($V13207e3d, 0, 5);
$Vc6c27fc9 = substr($V13207e3d, 5);
$V8a690a8f = "$Ved92eff8.$Vc6c27fc9";

 $Vec6ef230 = substr($V41ef8940, 24, 10);
$V1d665b9b = $this->Fd1ea9d43($Vec6ef230);
$V7bc3ca68 = "$Vec6ef230$V1d665b9b";
$V13207e3d = substr($V7bc3ca68, 0, 5);
$Ved92eff8 = substr($V7bc3ca68, 5);
$V4499f7f9 = "$V13207e3d.$Ved92eff8";

 $Vec6ef230 = substr($V41ef8940, 34, 10);
$V1d665b9b = $this->Fd1ea9d43($Vec6ef230);
$V7bc3ca68 = "$Vec6ef230$V1d665b9b";
$V13207e3d = substr($V7bc3ca68, 0, 5);
$Ved92eff8 = substr($V7bc3ca68, 5);
$V9e911857 = "$V13207e3d.$Ved92eff8";

 $V0db9137c = substr($V41ef8940, 4, 1);

 $Va7ad67b2 = substr($V41ef8940, 5, 14);
return "$V8a690a8f $V4499f7f9 $V9e911857 $V0db9137c $Va7ad67b2";
 }
function F294e91c9($V4d5128a0)
 {
 $Ve2b64fe0 = substr($V4d5128a0, 0, 3);
$V284e2ffa = $this->F11efdac1($Ve2b64fe0);

 return $Ve2b64fe0 . "-" . $V284e2ffa;
}

 function F6266027b($V0842f867, $Vce2db5d6, $V0152807c, $V401281b0 = "e"){
 if($V401281b0=="v"){
 $V0842f867 = str_replace(".","",$V0842f867);
 $V0842f867 = str_replace(",",".",$V0842f867);
 $V0842f867 = number_format($V0842f867,2,"","");
$V0842f867 = str_replace(".","",$V0842f867);
 $V401281b0 = "e";
}
while(strlen($V0842f867)<$Vce2db5d6){
 if($V401281b0=="e"){
 $V0842f867 = $V0152807c . $V0842f867;
}else{
 $V0842f867 = $V0842f867 . $V0152807c;
}
}
if(strlen($V0842f867)>$Vce2db5d6){
 if($V401281b0 == "e"){
 $V0842f867 = $this->F8277e091($V0842f867,$Vce2db5d6);
}else{
 $V0842f867 = $this->Fe1671797($V0842f867,$Vce2db5d6);
 }
}
return $V0842f867;
 }
function Fe1671797($V0842f867,$V005480c8){
 return substr($V0842f867,0,$V005480c8);
}
function F8277e091($V0842f867,$V005480c8){
 return substr($V0842f867,strlen($V0842f867)-$V005480c8,$V005480c8);
}

	function F421ec2d2($Veda29d69){
 $V0842f867 = $Veda29d69 ;
$V0842f867 = $this->F6266027b($V0842f867,10,"0","e");
$V3d801aa5 = 0 ;
for($V0cc175b9=1;$V0cc175b9<11;$V0cc175b9++){
 $V9dd4e461 = substr($V0842f867,$V0cc175b9-1,1);
$V41529076 = substr("7319731973",$V0cc175b9-1,1);
$V3d801aa5 = $V3d801aa5 + Round($this->F8277e091(($V9dd4e461 * $V41529076),1));
}
$V3d801aa5 = Round($this->F8277e091($V3d801aa5,1));
$V3d801aa5 = 10 - $V3d801aa5;
 if ($V3d801aa5 > 9) $V3d801aa5 = 0;
return $V3d801aa5;
}

	function F2c3af95d($V0842f867){
 $V9948c645 = $this->Fd1ea9d43($V0842f867);
do{
 $Vb25b0651 = $this->F11efdac1($V0842f867 . $V9948c645,7,1);
if ($Vb25b0651 == 1) {
 if ($Vb25b0651 == 9){
 $V9948c645 = 0;
}elseif ($V9948c645 < 9){
 $V9948c645++;
}else{
 $V9948c645 = 0;
}
 }
}while ($Vb25b0651 == 1);

 if ($Vb25b0651 > 0){
 $Vb25b0651 = 11 - $Vb25b0651;
}
return "$V9948c645$Vb25b0651";
	}
}

function fbarcode($V01773a8a){
$V77e77c6a = 1 ;
$V5f44b105 = 3 ;
$V2c9890f4 = 50 ;
$Ve5200a9e[0] = "00110" ;
$Ve5200a9e[1] = "10001" ;
$Ve5200a9e[2] = "01001" ;
$Ve5200a9e[3] = "11000" ;
$Ve5200a9e[4] = "00101" ;
$Ve5200a9e[5] = "10100" ;
$Ve5200a9e[6] = "01100" ;
$Ve5200a9e[7] = "00011" ;
$Ve5200a9e[8] = "10010" ;
$Ve5200a9e[9] = "01010" ;
for($Vbd19836d=9;$Vbd19836d>=0;$Vbd19836d--){
 for($V3667f6a0=9;$V3667f6a0>=0;$V3667f6a0--){
 $V8fa14cdd = ($Vbd19836d * 10) + $V3667f6a0 ;
$V62059a74 = "" ;
for($V865c0c0b=1;$V865c0c0b<6;$V865c0c0b++){
 $V62059a74 .= substr($Ve5200a9e[$Vbd19836d],($V865c0c0b-1),1) . substr($Ve5200a9e[$V3667f6a0],($V865c0c0b-1),1);
}
$Ve5200a9e[$V8fa14cdd] = $V62059a74;
}
}


?><img src="/_img/boleto_banrisul/p.gif" width="<?=$V77e77c6a?>" height="<?=$V2c9890f4?>" border="0"><img
src="/_img/boleto_banrisul/b.gif" width="<?=$V77e77c6a?>" height="<?=$V2c9890f4?>" border="0"><img
src="/_img/boleto_banrisul/p.gif" width="<?=$V77e77c6a?>" height="<?=$V2c9890f4?>" border="0"><img
src="/_img/boleto_banrisul/b.gif" width="<?=$V77e77c6a?>" height="<?=$V2c9890f4?>" border="0"><img
<?
$V62059a74 = $V01773a8a ;
if(bcmod(strlen($V62059a74),2) <> 0){
	$V62059a74 = "0" . $V62059a74;
}

while (strlen($V62059a74) > 0) {
 $V865c0c0b = round(Ff2317ae6($V62059a74,2));
$V62059a74 = F0835e508($V62059a74,strlen($V62059a74)-2);
$V8fa14cdd = $Ve5200a9e[$V865c0c0b];
for($V865c0c0b=1;$V865c0c0b<11;$V865c0c0b+=2){
 if (substr($V8fa14cdd,($V865c0c0b-1),1) == "0") {
 $Vbd19836d = $V77e77c6a ;
}else{
 $Vbd19836d = $V5f44b105 ;
}
?>
 src="/_img/boleto_banrisul/p.gif" width="<?=$Vbd19836d?>" height="<?=$V2c9890f4?>" border="0"><img
<?
 if (substr($V8fa14cdd,$V865c0c0b,1) == "0") {
 $V3667f6a0 = $V77e77c6a ;
}else{
 $V3667f6a0 = $V5f44b105 ;
}
?>
 src="/_img/boleto_banrisul/b.gif" width="<?=$V3667f6a0?>" height="<?=$V2c9890f4?>" border="0"><img
<?
 }
}

?>
src="/_img/boleto_banrisul/p.gif" width="<?=$V5f44b105?>" height="<?=$V2c9890f4?>" border="0"><img
src="/_img/boleto_banrisul/b.gif" width="<?=$V77e77c6a?>" height="<?=$V2c9890f4?>" border="0"><img
src="/_img/boleto_banrisul/p.gif" width="<?=1?>" height="<?=$V2c9890f4?>" border="0"> <?
}
function Ff2317ae6($V0842f867,$V005480c8){
	return substr($V0842f867,0,$V005480c8);
}
function F0835e508($V0842f867,$V005480c8){
	return substr($V0842f867,strlen($V0842f867)-$V005480c8,$V005480c8);
}
?>