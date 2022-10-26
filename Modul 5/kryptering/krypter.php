<?php 
function krypter($input) {
$kryptertOrd = implode('qwklo', str_split($input));
return $kryptertOrd; 
}



?>