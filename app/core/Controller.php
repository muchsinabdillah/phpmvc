<?php

class Controller {
    public function View($view,$data = []){
        require_once '../app/views/' . $view . '.php';
    }
}