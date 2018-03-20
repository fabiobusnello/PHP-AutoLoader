<?php

function __autoload( $class_name )
{
    $fileName = 'vendas/' . $class_name . '.php';

    if( file_exists( $fileName ) )
    {
        require_once $fileName;
    }
}