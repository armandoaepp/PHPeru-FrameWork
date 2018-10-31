<?php


function toCamelCase($string) {

    $value = ucwords($string, "_");
    $value = str_replace('_', '', $value);
    return $value ;
}

