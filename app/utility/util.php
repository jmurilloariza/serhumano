<?php

class Util {

    public static function validarString($data){
        foreach ($data as $item) {
            if (!is_string($item) || $item == '') {
                return false;
            }
        }
        return true;
    }

    public static function validarNumber($data){
        foreach ($data as $item) {
            if (!is_numeric($item)) {
                return false;
            }
        }
        return true;
    }

    public static function validarDate($data){
        foreach ($data as $item) {
            $valores = explode('-', $item);
            if(count($valores) != 3 && !checkdate($valores[1], $valores[2], $valores[0])){
                return false;
            }
        }
        return true;
    }
}