<?php

    /**
     *  cette fonction renvoi active si la page courante correspond au paramettre
     *
     * @param $page
     * @return classe active
     */

    function set_active($page)
    {
         //recuperation de la page courante
        $path = array_pop( explode('/',$_SERVER['SCRIPT_NAME']));

        if($path == $page.'.php')
        {
            return "active";
        }else
        {
            return "";
        }
    }


