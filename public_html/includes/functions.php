<?php
function ajustadata($data, $tipo){
	switch($tipo){
		case 'site':
			$dataF = split("-", $data);
			$data = $dataF[2].'/'.$dataF[1].'/'.$dataF[0];
		break;
		case 'banco':
			$dataF = split('/', $data);
			$data = $dataF[2].'-'.$dataF[1].'-'.$dataF[0];
		break;
		case 'calculo':
			$dlist=explode('/',$data);
			$data = mktime($dlist[1],$dlist[0],$dlist[2]);
		break;
		case 'aniversario':
			$dataF = split("-", $data);
			$data = $dataF[2].'/'.$dataF[1];
		break;
		case 'timestamp':
			$dataF = split(" ", $data);
			$dataD = ajustadata($dataF[0], 'site');
			$data = $dataD." ".$dataF[1];
		break;
	}
	return $data;
}

function Randomizar($iv_len)
{
    $iv = '';
    while ($iv_len-- > 0) {
        $iv .= chr(mt_rand() & 0xcc);
    }
    return $iv;
}
function cripfy($texto, $senha, $iv_len = 10){
    $texto .= "\x13";
    $n = strlen($texto);
    if ($n % 16) $texto .= str_repeat("\0", 16 - ($n % 16));
    $i = 0;
    $Enc_Texto = Randomizar($iv_len);
    $iv = substr($senha ^ $Enc_Texto, 0, 512);
    while ($i < $n) {
        $Bloco = substr($texto, $i, 16) ^ pack('H*', md5($iv));
        $Enc_Texto .= $Bloco;
        $iv = substr($Bloco . $iv, 0, 512) ^ $senha;
        $i += 16;
    }
    return preg_replace("/[{\/}]/", "&",base64_encode($Enc_Texto));
}
function decripfy($Enc_Texto, $senha, $iv_len = 10){
    $Enc_Texto = preg_replace("/[{&}]/", "/",$Enc_Texto);
    $Enc_Texto = base64_decode($Enc_Texto);
    $n = strlen($Enc_Texto);
    $i = $iv_len;
    $texto = "";
    $iv = substr($senha ^ substr($Enc_Texto, 0, $iv_len), 0, 512);
    while ($i < $n) {
        $Bloco = substr($Enc_Texto, $i, 16);
        $texto .= $Bloco ^ pack('H*', md5($iv));
        $iv = substr($Bloco . $iv, 0, 512) ^ $senha;
        $i += 16;
    }
    return preg_replace("/\\x13\\x00*$/", "", $texto);
}
?>
