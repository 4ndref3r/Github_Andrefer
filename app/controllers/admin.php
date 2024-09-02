<?php
require_once './app/models/userModel.php';
require_once './app/models/docentesModel.php';
    class Admin extends SessionController{
        private $user;
        protected $model;
        function __construct(){
            parent::__construct();
            error_log('Admin::construct -> inicio de Admin');
            $this->user=$this->getUserSessionData();
            $this->model=new UserModel();
        }

        function render(){
            error_log('Dashboard::construct -> Inicio del Admin');
            $users = new UserModel();
            $tusers= $users->getTotalUser();
            $this->view->render('admin/index',[
                'user'=> $this->user,
                'tusers'=> $tusers
            ]);
        }

        function adm_users(){
            $usuariosModel=new UserModel();
            $usuarios=$usuariosModel->getAll();
            if(empty($usuarios)){
                error_log('ADMIN::adm_users->No se encontraron usuarios');
            }
            $this->view->render('admin/usuarios',[
                'user'=> $this->user,
                'usuarios'=>$usuarios
            ]);
        }

        function adm_acad(){
            $docentesModel=new DocentesModel();
            $docentes=$docentesModel->getAll();
            if(empty($usuarios)){
                error_log('ADMIN::adm_users->No se encontraron usuarios');
            }
            $this->view->render('inc/head',[]);
            $this->view->render('inc/admin_academico',[]);
            $this->view->render('admin/docente',[
                'user'=> $this->user,
                'docentes'=>$docentes
            ]);
            $this->view->render('inc/footer',[]);
        }

        function teachers(){
            $usuariosModel=new UserModel();
            $usuarios=$usuariosModel->getAll();
            if(empty($usuarios)){
                error_log('ADMIN::adm_users->No se encontraron usuarios');
            }
            $this->view->render('inc/head',[]);
            $this->view->render('inc/admin_academico',[]);
            $this->view->render('admin/docente',[
                'user'=> $this->user,
                'usuarios'=>$usuarios
            ]);
            $this->view->render('inc/footer',[]);
        }


        function adm_horarios(){
            $usuariosModel=new UserModel();
            $usuarios=$usuariosModel->getAll();
            if(empty($usuarios)){
                error_log('ADMIN::adm_users->No se encontraron usuarios');
            }
            $this->view->render('inc/head',[]);
            $this->view->render('inc/admin_horarios',[]);
            $this->view->render('admin/academico',[
                'user'=> $this->user,
                'usuarios'=>$usuarios
            ]);
            $this->view->render('inc/footer',[]);
        }

        function newUser(){
            if($this->existPOST(['usuario','contra'])){
                $usuario=$this->getPost('usuario');
                $contra=$this->getPost('contra');
                $rol=$this->getPost('rol');

                if ($usuario=='' || empty($usuario) || $contra=='' || empty($contra)) {
                    $this->redirect('admin/adm_users',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY]);
                }
                $user = new UserModel();
                $user->setUsuario($usuario);
                $user->setContra($contra);
                $user->setRol($rol);

                if ($user->exists($usuario)) {
                    $this->redirect('admin/adm_users',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER_EXISTS]);
                }elseif ($user->save()) {
                    $this->redirect('admin/adm_users',['success'=>SuccessMessages::SUCCESS_SIGNUP_NEWUSER]);
                }else {
                    $this->redirect('admin/adm_users',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER]);
                }

            }else {
                $this->redirect('admin/adm_users',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER]);
            }
        }

        function newTeacher(){
            if($this->existPOST(['nombre','aPaterno','aMaterno','celular'])){
                $nombre=$this->getPost('nombre');
                $aPaterno=$this->getPost('aPaterno');
                $aMaterno=$this->getPost('aMaterno');
                $celular=$this->getPost('celular');

                if ($nombre=='' || empty($nombre) || $aPaterno=='' || empty($aPaterno)) {
                    $this->redirect('admin/adm_acad',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY]);
                }
                $teach = new DocentesModel();
                $teach->setNombre($nombre);
                $teach->setApellidoPaterno($aPaterno);
                $teach->setApellidoMaterno($aMaterno);
                $teach->setCelular($celular);
                $teach->setIdUsuario($this->user->getId());

                $teach->save();
                $this->redirect('admin/adm_acad',['success'=>SuccessMessages::SUCCESS_SIGNUP_NEWUSER]);
            }
        }

        function admDelete($params){
            if($params===NULL){
                error_log('parametros nulos');
                $this->redirect('admin/adm_users',[]);
            }
            $id=$params[0];
            $res=$this->model->delete($id);
            $this->redirect('admin/adm_users',[]);
        }

        function admHabilite($params){
            if($params===NULL){
                error_log('parametros nulos');
                $this->redirect('admin/adm_users',[]);
            }
            $id=$params[0];
            $res=$this->model->unDelete($id);
            $this->redirect('admin/adm_users',[]);
        }

        function admValues($params){
            $id=$params[0];
            $res=$this->model->get($id);
            $this->view->render('admin/users_modify',[
                'user'=> $this->user,
                'editar'=>$res
            ]);
        }
        function update_adm(){
            if($this->existPOST(['id','usuario','rol','nombre'])){
                $id=$this->getPost('id');
                $usuario=$this->getPost('usuario');
                $rol=$this->getPost('rol');
                $nombre=$this->getPost('nombre');

                if ($usuario=='' || empty($usuario) || $rol=='' || empty($rol)) {
                    $this->redirect('admin/adm_users',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY]);
                }
                $user = new UserModel();
                $user->setId($id);
                $user->setUsuario($usuario);
                $user->setRol($rol);
                $user->setNombre($nombre);

                $user->adm_update();
                $this->redirect('admin/adm_users',['success'=>SuccessMessages::SUCCESS_SIGNUP_NEWUSER]);
            }else {
                $this->redirect('adm/adm_users',['error'=>ErrorMessages::ERROR_SIGNUP_NEWUSER]);
            }
        }
    }