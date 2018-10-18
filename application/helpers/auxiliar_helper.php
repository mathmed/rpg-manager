<?php

/* arquivo com funções auxiliares */

/* função auxiliar para formatar data */

function formata_data($data){
    /* função que formata a data do formato datetime para um string */
    $data = explode("-", $data);
    $data = $data[2].'/'.$data[1].'/'.$data[0];
    return $data;
            
}



?>