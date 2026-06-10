<?php
// View: exibe os números e as operações

class View {
    private $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }
}

public function output() {
    return "
    <h1> Calculadora MVC </h1> 
    <p> Número 1: {$this->model->numero1} </p>
    
    
    
    "
}