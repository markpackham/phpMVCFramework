<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model("User");
    }

    public function index()
    {
        $data = [
            "title" => "Home page",
            "name" => "Mark"
        ];
        // http://localhost/phpMVCFramework/pages
        $this->view("pages/index", $data);
    }

    public function about()
    {
        // http://localhost/phpMVCFramework/pages/about
        $this->view("pages/about");
    }
}
