<?php

require 'simple_html_dom.php';

class SimpleHtmlDomParser
{
    /**
     * @return mixed
     */
    public static function file_get_html(){
        return call_user_func_array('\file_get_html', func_get_args());
    }

    /**
     * @return mixed
     */
    public static function str_get_html(){
        return call_user_func_array('\str_get_html', func_get_args());
    }
}
