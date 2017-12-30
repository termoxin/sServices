<?php

namespace Engine\Helper;

class Redirect
{
    /**
     * @param $html_location
     */
    public static function url($html_location)
    {
        if(!headers_sent())
        {
            header("Location:".$html_location, TRUE, 302);
            exit;
        }

        exit('<meta http-equiv="refresh" content="0; url='.$html_location.'" />');
    }
}