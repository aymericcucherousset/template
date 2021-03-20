<?php

function isInteger($input):boolval{
    return(ctype_digit(strval($input)));
}

function disconnect(){
    session_distroy();
}

?>