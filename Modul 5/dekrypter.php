<?php 
function dekrypter($input) {
    $search = 'qwklo';
    $dekrypertOrd = str_replace($search, '', ($input));
    return $dekrypertOrd; 
}


?>



