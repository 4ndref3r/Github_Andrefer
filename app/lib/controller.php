<?php
    class Controller{
        protected $view;
        protected $model;

        function __construct(){
            $this->view = new View();
            $this->model=null;
        }

        function loadModel($model){
            $url='app/models'.$model.'model.php';
            if (file_exists($url)) {
                require_once $url;
                $modelName =$model.'Model';
                $this->model=new $modelName();
            }
        }

        function existPOST($params){
            foreach($params as $param){
                if (!isset($_POST[$param])) {
                    error_log('CONTROLLER:: EXISTSPOST no existe el parametro'.$param);
                    return false;
                }
                return true;
            }
        }

        function existGET($params){
            foreach($params as $param){
                if (!isset($_GET[$param])) {
                    error_log('CONTROLLER:: EXISTSGET no existe el parametro'.$param);
                    return false;
                }
                return true;
            }
        }

        function getGet($name){
            return $_GET[$name];
        }

        function getPost($name){
            return $_POST[$name];
        }

        function redirect($route,$mensajes){
            $data = [];
            $params = '';
        
            // Verifica que $mensajes sea un array
            if (!is_array($mensajes)) {
                die('El parámetro $mensajes debe ser un array.');
            }
        
            // Depura el contenido de $mensajes
            error_log('Contenido de $mensajes: ' . print_r($mensajes, true));
        
            // Construye la cadena de parámetros de consulta
            foreach ($mensajes as $key => $mensaje) {
                // Usa urlencode para asegurar que los valores estén correctamente codificados
                $data[] = urlencode($key) . '=' . urlencode($mensaje);
            }
        
            // Une los parámetros con el símbolo '&'
            $params = join('&', $data);
        
            if ($params != '') {
                $params = '?' . $params;
            }
        
            // Imprime la URL para depuración
            $url = constant('URL') . $route . $params;
            error_log("Redirigiendo a: " . $url);
        
            // Redirige al navegador
            header('Location: ' . $url);
            exit(); // Detiene la ejecución después de redirigir
        }
    }