<?php
    require_once './app/models/docentesModel.php';
    require_once './app/models/aulasModel.php';
    class Docentes extends SessionController{
        private $user;

        function __construct(){
            parent::__construct();
            $this->user=$this->getUserSessionData();
        }

        function render(){
            $docentesModel=new DocentesModel();
            $docentes=$docentesModel->getAll();
            if (empty($docentes)) {
                error_log('DOCENTE::render->No se encontraron docentes');
            }
            $this->view->render('inc/head',[]);
            $this->view->render('inc/admin_academico',[]);
            $this->view->render('admin/docente',[
                'user'=>$this->user,
                'docentes'=>$docentes]);
            $this->view->render('inc/footer',[]);
        }

        function aulas(){
            $aulasModel=new AulasModel();
            $aulas=$aulasModel->getAll();
            if (empty($aulas)) {
                error_log('DOCENTE::render->No se encontraron docentes');
            }
            $this->view->render('inc/head',[]);
            $this->view->render('inc/admin_academico',[]);
            $this->view->render('admin/aula',[
                'user'=>$this->user,
                'aulas'=>$aulas]);
            $this->view->render('inc/footer',[]);
        }

        function newDocente(){
            if (!$this->existPOST(['nombre','Apellido Paterno','apellidoMaterno','celular'])) {
                $this->redirect('dashboard',[]);
                return;
            }

            if($this->user==NULL){
                $this->redirect('dashboard',[]);
                return;
            }

            $docente = new DocentesModel();
            $docente->setNombre($this->getPost('nombre'));
            $docente->setApellidoPaterno($this->getPost('apellidoPaterno'));
            $docente->setApellidoMaterno($this->getPost('apellidoMaterno'));
            $docente->setEmail($this->getPost('email'));
            $docente->setCelular($this->getPost('celular'));
            $docente->setLimiteHoras($this->getPost('limiteHoras'));
            $docente->setIdUsuario($this->user->getId());

            $docente->save();
            $this->redirect('dashboard',[]);
        }

        function create(){
            $docente=new DocentesModel();
            $this->view->render('docentes/create',[
                'docente'=>$docente->getAll(),
                'user'=>$this->user
            ]);
        }

        function getHorariosId(){
            
        }
    }