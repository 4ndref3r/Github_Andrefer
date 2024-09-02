<?php
    require_once './app/models/loginModel.php';
    class Login extends SessionController{

        protected $loginModel;
        function __construct(){
            parent::__construct();
            error_log('Login::construct -> inicio de Login');
            $this->view=new View();
            $this->loginModel=new LoginModel();
        }

        function render(){
            error_log('Login::render -> Carga el index de login');
            $this->view->render('login/index');
        }

        function authenticate(){
            error_log('Entrando a authenticate');
            if ($this->existPOST(['usuario','password'])) {
                $usuario=$this->getPost('usuario');
                $password=$this->getPost('password');

                if ($usuario==='' || empty($usuario) || $password==='' || empty($password)) {
                    $this->redirect('login',['error'=>ErrorMessages::ERROR_LOGIN_AUTHENTICATE_EMPTY]);
                    return;
                }

                $user= $this->loginModel->login($usuario,$password);
                error_log('Entra a verificar login.$user.');
                if($user!==NULL){
                    $this->initialize($user);
                }else{
                    $this->redirect('login',['error'=>ErrorMessages::ERROR_LOGIN_AUTHENTICATE_DATA]);

                }
            }else{
                $this->redirect('login',['error'=>ErrorMessages::ERROR_LOGIN_AUTHENTICATE]);
            }

        }
    }