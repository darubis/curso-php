<?php

if( ! function_exists('upper') ){

    function uppper($value){
        return Text\Format::upperText($value);
    }
}


if( ! function_exists('lower') ){

    function lower($value){
        return Text\Format::lowerText($value);
    }  
}