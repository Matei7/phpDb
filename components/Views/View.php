<?php

class View
{

    private $components;

    public function __construct()
    {
        $this->components = array();
    }

    public function assign($key, $val)
    {
        $this->components[$key] = $val;
    }

    public function __get($key)
    {
        return $this->components[$key];
    }


    public function show($template)
    {
        include "templates/" . $template;
    }


}