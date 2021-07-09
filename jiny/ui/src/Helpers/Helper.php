<?php

if (!function_exists("CMenu")) {
    function CMenu() {
        return new \Jiny\UI\CMenu();
    }
}

if (!function_exists("CMenuItem")) {
    function CMenuItem($items=null) {
        return new \Jiny\UI\CMenuItem($items);
    }
}


/**
     * 2차원 배열 정렬
     *
     * @param  mixed $array
     * @param  mixed $key
     * @param  mixed $sort
     * @return void
     */
    function arr_sort( $array, $key, $sort = "asc" )
    {
        $values = [];
        foreach( $array as $k => $v ) {
            $index = $v[$key];
            $values[$index] = $k;
        }

        if ( $sort=='asc') {
            ksort($values);
        } else{
            krsort($values);
        }

        $ret = [];
        foreach($values as $k => $v) {
            array_push($ret, $array[$v]);
        }
  
        return $ret;
    }