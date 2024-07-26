<?php
    require_once './app/helpers/session.php';
    require_once './app/models/userModel.php';
    class SessionController extends Controller
    {
        private $idUsuario;
        private $usuarioSession;
        private $usuario;
        private $rol;
        private $defaultSites;
        private $sites;
        private $session;

        function __construct(){
            parent::__construct();
            $this->init();
        }

        function init(){
            $this->session = new Session();
            $json = $this->getJSONFileConfig();
            $this->sites=$json['sites'];
            $this->defaultSites=$json['default-sites'];
            $this->validateSession();
        }

        private function getJSONFileConfig(){
            $string = file_get_contents('./app/config/access.json');
            $json = json_decode($string,true);
            return $json;
        }

        public function validateSession(){
            error_log('SESSIONCONTROLLER::validateSession');
            # Si existe la sesión
            if ($this->existsSession()) {
                $rol=$this->getUserSessionData()->getRol();
                $currentPage=$this->getCurrentPage();
                error_log('Rol de usuario; '.$rol);
                error_log('Pagina actual: '.$currentPage);
                #Si la pagina a entrar es publica
                if ($this->isPublic()) {
                    #Si la pagina es publica y hay una sesión activa, no redirige
                    error_log('Pagina pública,no redirige');
                    return;
                }else{
                    if($this->isAuthorized($rol)){
                        error_log('Usuario autorizado, no redirige');
                        return;
                    }else{
                        $this->redirectDefaultSiteByRole($rol);
                        #NO AUTORIZADO, REDIRIGE A LA PAGINA PREDETERMINADA POR ROL
                        error_log('SESSIONCONTROLLER::Primera redireeción');
                    }
                }
            }else {
                if($this->isPublic()){
                    #no pasa nada, lo dejo entrar
                    error_log('No hay sesión, pero la página es pública');
                    return;
                }else{
                    header('Location: '.constant('URL').'');
                    error_log('No hay sesión y la página no es pública, redirigiendo al inicio');
                    exit();
                }

            }
        }

        private function isAuthorized($rol){
            $currentURL=$this->getCurrentPage();
            $currentURL=preg_replace("/\?.*/", "",$currentURL);
            for ($i=0; $i < sizeof($this->sites); $i++) { 
                if ($currentURL==$this->sites[$i]['site'] && $this->sites[$i]['rol']==$rol) {
                    return true;
                }
            }

            return false;
        }

        private function redirectDefaultSiteByRole($rol)
        {
            $currentPage=$this->getCurrentPage();
            $url='';
            for ($i=0; $i < sizeof($this->sites); $i++) { 
                if ($this->sites[$i]['rol']==$rol) {
                   $url = ''.$this->sites[$i]['site'];
                    break;
                }
            }

            $redirectUrl=constant('URL').$url;
            error_log('Redireccionando a: '.$redirectUrl);

            if ($currentPage!==$redirectUrl) {
                header('location:'.$redirectUrl);
                exit();
            }else{
                error_log('La redirrección a la misma página se evita');
            }
        }

        function isPublic(){
            $currentURL=$this->getCurrentPage();
            $currentURL=preg_replace("/\?.*/", "",$currentURL);
            for ($i=0; $i < sizeof($this->sites); $i++) { 
                if ($currentURL==$this->sites[$i]['site'] && $this->sites[$i]['access']=='public') {
                    return true;
                }
            }

            return false;
        }
        function getCurrentPage(){
            $actualLink=trim("$_SERVER[REQUEST_URI]",'/');
            $url=explode('/',$actualLink);
            error_log('SESSIONCONTROLLER::getCurrentPage ->'.$url[0]);
            return $url[0];
        }

        function existsSession(){
            if(!$this->session->exists()) return false;
            if($this->session->getCurrentUser()==NULL) return false;
            
            $idUsuario=$this->session->getCurrentUser();
            if ($idUsuario) return true;
            return false;
        }

        function getUserSessionData(){
            $id=$this->session->getCurrentUser();
            $this->usuario=new UserModel();
            $this->usuario->get($id);
            error_log('SESSIONCONTROLLER->getSessionData');
            return $this->usuario;
        }

        function initialize($user){
            $this->session->setCurrentUser($user->getId());
            $this->authorizeAccess($user->getRol());
        }

        function authorizeAccess($rol){
            switch($rol){
                case 'Docente':
                    $this->redirect($this->defaultSites['Docente'],[]);
                break;
                case 'Usuario':
                    $this->redirect($this->defaultSites['Usuario'],[]);
                break;
                case 'Admin':
                    $this->redirect($this->defaultSites['Admin'],[]);
                break;
            }
        }

        function logout(){
            $this->session->closeSession();
        }
    }