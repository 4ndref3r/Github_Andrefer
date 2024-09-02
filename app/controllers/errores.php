<?php
    class Errores extends Controller{
        function __construct(){
            parent::__construct();
            error_log('Errores::construct -> Inicio de errores');
            $this->view->render('errores/index');
        }
    }