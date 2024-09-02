<?php
require_once './app/models/docentesModel.php';
    class Dashboard extends SessionController{
        private $user;
        function __construct(){
            parent::__construct();
            error_log('Dashboard::construct -> inicio de Dashboard');
            $this->user=$this->getUserSessionData();
        }

        function render(){
            error_log('Dashboard::construct -> Inicio del Dashboard');
            $docentesModel=new DocentesModel();
            $docentes=$this->getDocentes(5);
            $totalThisMonth=$docentesModel->getAllByUserId($this->user->getId());
            $this->view->render('dashboard/index',[
                'user'=> $this->user,
                'docentes' => $docentes
            ]);

        }

        private function getDocentes($n=0){
            if($n<0) return NULL;
            $docentes= new DocentesModel();
            return $docentes->getAllByUserId($this->user->getId());
        }

        public function getMenu(){

        }
        public function getMaterias(){

        }
    }