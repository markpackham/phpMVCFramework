<?php

class Pages
{
    public function __construct()
    {
        // echo "Loaded";
    }

    public function index()
    {
        // http://localhost/phpMVCFramework/pages
        echo "Homepage";
    }

    public function about()
    {
        // http://localhost/phpMVCFramework/pages/about
        echo "About";
    }
}
