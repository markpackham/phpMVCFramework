<?php

class Pages extends Controller
{
    public function __construct()
    {
        // echo "Loaded";
    }

    public function index()
    {
        // http://localhost/phpMVCFramework/pages
        $this->view("pages/index");
    }

    public function about()
    {
        // http://localhost/phpMVCFramework/pages/about
        $this->view("pages/about");
    }
}
