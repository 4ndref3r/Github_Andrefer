<?php
    class UserModel extends Model{
        private $id;
        private $usuario;
        private $nombre;
        private $contra;
        private $rol;
        private $estado;
        private $token;
        private $expiracion;
        private $foto;

        public function setId($id){ $this->id=$id;}        
        public function setUsuario($usuario){ $this->usuario=$usuario;}             
        public function setNombre($nombre){ $this->nombre=$nombre;}             
        public function setRol($rol){ $this->rol=$rol;}
        public function setEstado($estado){$this->estado=$estado;}    
        public function setToken($token){$this->token=$token;}
        public function setFoto($foto){$this->foto=$foto;}
        public function setExpiracion($expiracion){$this->expiracion=$expiracion;}  

        public function getId(){ return $this->id;}
        public function getToken(){return $this->token;}
        public function getExpiracion($expiracion){return $this->expiracion;}
        public function getFoto(){return $this->foto;}
        public function getUsuario(){ return $this->usuario;}
        public function getNombre(){ return $this->nombre;}
        public function getContra(){ return $this->contra;}
        public function getRol(){ return $this->rol;}
        public function getEstado(){return $this->estado;}
        public function __construct()
        {
            parent::__construct();
            $this->id=0;
            $this->usuario='';
            $this->contra='';
            $this->rol='';
            $this->estado=0;
        }

        public function save(){
            try{
                $query = $this->prepare('UPDATE usuarios SET nombre=:nombre,contra=:contra,token=:token,expiracion=:expiracion,rol=:rol,estado=:estado WHERE usuario=:usuario');
                $query->execute([
                    'usuario'   =>  $this->usuario,
                    'nombre'   =>  $this->nombre,
                    'contra'    =>  $this->contra,
                    'token'    =>  $this->token,
                    'expiracion'    =>  $this->expiracion,
                    'rol'       =>  $this->rol,
                    'estado'    =>  $this->estado
                ]);
                return true;
            }catch(PDOException $e){
                error_log('USERMODEL::save->PDOExcepton'.$e);
                return false;
            }
        }
        public function saveToken(){
            try {
                $query=$this->prepare('INSERT INTO usuarios(usuario, contra, token, expiracion, estado) VALUES (:usuario, :contra, :token, :expiracion, :estado)');
                $query->execute([
                    'usuario'=>$this->usuario,
                    'contra'=>$this->contra,
                    'token'=>$this->token,
                    'expiracion'=>$this->expiracion,
                    'estado'=>$this->estado
                ]);
                return true;
            } catch (PDOException $e) {
                error_log('USERMODEL::update->PDOException'.$e);
                return false;
            }
        }

        public function getUserByToken($token){
            try {
                $query=$this->prepare('SELECT*FROM usuarios WHERE token=:token AND expiracion > CURRENT_TIMESTAMP()');
                $query->execute(['token'=>$token]);

                if ($query->rowCount()==1) {
                    $item=$query->fetch(PDO::FETCH_ASSOC);

                    $user=new UserModel(); 
                    $user->from($item);
                    return $user;
                }else{
                    return NULL;
                }

            } catch (PDOException $e) {
                error_log('LoginMOdel::login->exception'.$e);
                return NULL;
            }
        }
        public function getAll(){
            $items=[];
            try {
                $query=$this->query('SELECT * FROM dbhorarios.usuarios');
                if ($query===false){
                    error_log('USERMODEL::getAll->Error en la consulta SQL');
                    return $items;
                }
                while($p=$query->fetch(PDO::FETCH_ASSOC)){
                    $item = new UserModel();
                    $item -> setId($p['id']);
                    $item -> setUsuario($p['usuario']);
                    $item -> setContra($p['contra']);
                    $item -> setEstado($p['estado']);
                    $item -> setRol($p['rol']);

                    array_push($items, $item);
                }
                if(empty($items)){
                    error_log('USERMODEL::getAll->No se encontraron usuarios');
                }
                return $items;
            } catch (PDOException $e) {
                error_log('USERMODEL::getAll->PDOExcepton'.$e);
                return $items;
            }
        }

        private function getHashedPassword($password){
            return password_hash($password,PASSWORD_DEFAULT);
        }

        public function setContra($contra){
                $this->contra=$this->getHashedPassword($contra);
        }

        public function get($id){
            try {
                $query=$this->prepare('SELECT*FROM usuarios WHERE id=:id');
                $query->execute([
                    'id'=>$id
                ]);

                $user=$query -> fetch(PDO::FETCH_ASSOC);
                $this -> setId($user['id']);
                $this -> setUsuario($user['usuario']);
                $this -> setNombre($user['nombre']);
                $this -> setContra($user['contra']);
                $this -> setEstado($user['estado']);
                $this -> setRol($user['rol']);
                return $this;
            } catch (PDOException $e) {
                error_log('USERMODEL::get->PDOException'.$e);
            }
        }

        public function delete($id){
            try {
                $query=$this->prepare('UPDATE usuarios SET estado=0 WHERE id=:id');
                $query->execute([
                    'id'=>$id
                ]);

                return true;
            } catch (PDOException $e) {
                error_log('USERMODEL::delete1->PDOException'.$e);
                return false;
            }
        }

        public function unDelete($id){
            try {
                $query=$this->prepare('UPDATE usuarios SET estado=1 WHERE id=:id');
                $query->execute([
                    'id'=>$id
                ]);

                return true;
            } catch (PDOException $e) {
                error_log('USERMODEL::delete1->PDOException'.$e);
                return false;
            }
        }

        public function update(){
            try {
                $query=$this->prepare('UPDATE usuarios SET usuario= :usuario, contra = :contra, rol=:rol WHERE id=:id');
                $query->execute([
                    'id'=>$this->id,
                    'usuario'=>$this->usuario,
                    'contra'=>$this->contra,
                    'rol'=>$this->rol
                ]);
                return true;
            } catch (PDOException $e) {
                error_log('USERMODEL::update->PDOException'.$e);
                return false;
            }
        }

        public function adm_update(){
            try {
                $query=$this->prepare('UPDATE usuarios SET nombre=:nombre, usuario= :usuario, rol=:rol WHERE id=:id');
                $query->execute([
                    'id'=>$this->id,
                    'usuario'=>$this->usuario,
                    'rol'=>$this->rol,
                    'nombre'=>$this->nombre
                ]);
                return true;
            } catch (PDOException $e) {
                error_log('USERMODEL::update->PDOException'.$e);
                return false;
            }
        }

        public function from($array){
            $this->id    = $array['id'];
            $this->usuario    = $array['usuario'];
            $this->contra     = $array['contra'];
            $this->nombre     = $array['nombre'];
            $this->rol        = $array['rol'];
            $this->token      = $array['token'];
            $this->estado      = $array['estado'];
            $this->expiracion = $array['expiracion'];

        }

        public function exists($usuario){
            try {
                $query=$this->prepare('SELECT usuario FROM usuarios WHERE usuario= :usuario');
                $query->execute(['usuario'=>$usuario]);
                if ($query->rowCount()>0) {
                    return true;
                }else{
                    return false;
                }
            } catch (PDOException $e) {
                error_log('USERMODEL::Exists->PDOException'.$e);
                return false;
            }
        }

        public function comparePasswords($contra,$id){
            try {
                $user = $this->get($id);
                return password_verify($contra,$user->getContra());
            } catch (PDOException $e) {
                error_log('USERMODEL::ComparandoPasswords->PDOException'.$e);
                return false;
            }
        }

        public function getTotalUser(){
            $tusers=0;
            try {
                $query=$this->prepare('SELECT COUNT(id) AS total FROM usuarios WHERE estado=1');
                $query->execute();
                $tusers=$query->fetch(PDO::FETCH_ASSOC)['total'];
                if($tusers==NULL) $tusers =0;
                return $tusers;
            } catch (PDOException $e) {
                error_log('USERMODEL::getTotalUser->PDOException'.$tusers);
                return NULL;
            }
        }
    }