<?php
    class View{
        private $d;
        function __construct(){
        }

        function render($nombre,$data=[]){
            $this->d=$data;
            $this->handleMessages();
            require 'app/views/'.$nombre.'.php';
        }

        private function handleMessages(){
            if(isset($_GET['success']) && isset($_GET['error'])){

            }else if(isset($_GET['success'])){
                $this->handleSuccess();
            }else if(isset($_GET['error'])){
                $this->handleError();
            }
        }

        private function handleError(){
            $hash=$_GET['error'];
            $error=new ErrorMessages();
            if ($error->existsKey($hash)) {
                $this->d['error']=$error->get($hash);
            }
        }

        private function handleSuccess(){
            $hash=$_GET['success'];
            $success=new SuccessMessages();
            if ($success->existsKey($hash)) {
                $this->d['success']=$success->get($hash);
            }
        }

        public function showMessages(){
            $this->showErrors();
            $this->showSuccess();
        }

        public function showErrors(){
            if (array_key_exists('error',$this->d)) {
                echo '<div class="alert flex space-x-2 rounded-lg border border-error px-4 py-2 text-error">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg> '.$this->d['error'].'</div>';
            }
        }

        public function showSuccess(){
            if (array_key_exists('success',$this->d)) {
                echo '  <div class="alert flex rounded-full border border-primary bg-primary/10 py-2 px-4 text-primary dark:border-accent dark:bg-accent-light/15 dark:text-accent-light sm:px-5">
                            '.$this->d['success'].'
                        </div>';
            }
        }
    }