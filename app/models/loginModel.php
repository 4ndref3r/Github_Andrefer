<?php
    require_once './app/models/userModel.php';
    class LoginModel extends Model{
        function __construct(){
            parent::__construct();
        }

        function login($usuario,$contra){
            try {
                $query=$this->prepare('SELECT*FROM usuarios WHERE usuario=:usuario');
                $query->execute(['usuario'=>$usuario]);
                if ($query->rowCount()==1) {
                    $item=$query->fetch(PDO::FETCH_ASSOC);

                    $user=new UserModel(); 
                    $user->from($item);
                    error_log('LoginModel::Devuelve consulta');
                    if(password_verify($contra,$user->getContra()) || $user->getEstado()==1){
                        error_log('LoginModel::login->success');
                        return $user;
                    }else{
                        error_log('LoginModel::login->Contra no es igual');
                        return NULL;
                    }
                }

            } catch (PDOException $e) {
                error_log('LoginMOdel::login->exception'.$e);
                return NULL;
            }
        }
    }