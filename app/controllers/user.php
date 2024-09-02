<?php
    class User extends SessionController{
        private $user;
        private $model;
        function __construct(){
            parent::__construct();
            $this->user=$this->getUserSessionData();
        }

        function render(){
            $this->view->render('user/index',[
                'user'=>$this->user
            ]);
        }

        function updateBudget(){
            if(!$this->existPOST('budget')){
                $this->redirect('user',[]);
                return;
            }
        }

        function updateName(){
            if(!$this->existPOST('name')){
                $this->redirect('user',[]);
                return;
            }

            $name=$this->getPost('name');
            if (empty($name) || $name==NULL) {
                $this->redirect('user',[]);
                return;
            }

            $this->user->setUsuario($name);
            if($this->user->update()){
                $this->redirect('user',[]);
            }
        }

        function updatePassword(){
            if(!$this->existPOST(['current_password','new_password'])){
                $this->redirect('user',[]);
                return;
            }

            $current = $this->getPost('current_password');
            $new = $this->getPost('new_password');

            if (empty($current) || empty($new)) {
                $this->redirect('user',[]);
                return;
            }

            if($current==$new){
                $this->redirect('user',[]);
                return;
            }

            $newHash = $this->model->comparePasswords($current, $this->user->getId());
            if ($newHash) {
                $this->user->setContra($new);
                if ($this->user->update()) {
                    $this->redirect('user',[]);
                    return;
                }else{
                    $this->redirect('user',[]);
                    return;
                }
            }else{
                $this->redirect('user',[]);
                return;
            }

        }
    }