<?php
    require_once 'app/controllers/errores.php';
    class App{
        function __construct(){
            $url=isset($_GET['url']) ? $_GET['url']:'';
            $url=rtrim($url,'/');
            $url=explode('/',$url);
            //verificar si hay controlador
            if (empty($url[0])) {
                error_log('APP::construct-> no hay controlador especificado');
                $archivoController='app/controllers/login.php';
                require_once $archivoController;
                $controller = new Login();
                $controller->loadModel('login');
                $controller->render();
                return false;
            }else{
                $archivoController ='app/controllers/'.$url[0].'.php';
            }
            #Verificar si el archivo del controlador existe
            if (file_exists($archivoController)) {
                require_once $archivoController;

                $controller = new $url[0];
                $controller->loadModel($url[0]);
                #Verificar el método
                if (isset($url[1])) {
                    if (method_exists($controller,$url[1])) {
                        if(isset($url[2])){
                            // Nro de parametros
                            $nparam=count($url)-2;
                            // arreglo de parametros
                            $params=array_slice($url,2,$nparam);
                        }else{
                            $params=[];
                        }
                        call_user_func_array([$controller, $url[1]],$params);
                    }else{
                        //error, no existe el metodo
                        $controller=new Errores();
                    }
                    
                }else {
                    //no hay metodo a cargar, se carga el metodo por default
                    $controller->render();
                }
            }else{
                //no existe el archivo, mandar error
                $controller=new Errores();
            }
        }
    }