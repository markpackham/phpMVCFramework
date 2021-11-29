<?php

class Core
{
    protected $currentController = "Pages";
    protected $currentMethod = "index";
    // holds key parts of url
    // eg http://example.com/shop/glasses/men
    protected $params = [];

    public function __construct()
    {
        // print_r($this->getUrl());
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], "/");

            // forbid characters that the url shouldn't have eg @ or $
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // break into an array
            $url = explode("/", $url);
            return $url;
        }
    }
}
