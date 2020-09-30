<?php

namespace App\Controllers;

class Controller{

    public $view;

    public function content(){
        include $this->view;
    }

    public function render($view, $template){
        $this->view = "\\View\\www\\".$view.".php";
        include "\\View\\".$template.".php";
    }
}