<?php

namespace Core\helpers;

function truncate ( string $string, int $lg_max=100) {
    if (strlen($string) > $lg_max):
        $string = substr($string, 0, $lg_max);
        $last_space = strrpos($string, " ");
        $string = substr($string, 0, $last_space)."...";
        return $string;
    endif;
    return $string;
    }