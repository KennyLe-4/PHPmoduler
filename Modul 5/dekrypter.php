<?php 
function dekrypter($input) {
    $search = 'cnqo';
    $dekrypertOrd = str_replace($search, '', ($input));
    return $dekrypertOrd; 
}


?>