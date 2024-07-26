<?php

    class Session{
        private $sessionName='user';

        public function __construct()
        {
            if (session_status()===PHP_SESSION_NONE) {
                session_start();
            }
        }

        public function setCurrentUser($usuario)
        {
            $_SESSION[$this->sessionName]=$usuario;
        }

        public function getCurrentUser()
        {
            return $_SESSION[$this->sessionName];
        }

        public function closeSession()
        {
            session_unset();
            session_destroy();
        }

        public function exists()
        {
            return isset($_SESSION[$this->sessionName]);
        }
    }