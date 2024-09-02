<?php
    class DocentesModel extends Model{
        private $id;
        private $nombre;
        private $apellidoPaterno;
        private $apellidoMaterno;
        private $puntuacion;
        private $celular;
        private $estado;
        private $limiteHoras;
        private $idUsuario;
          
        public function setId($id){$this-> id=$id;}
        public function setNombre($nombre){$this-> nombre= $nombre;}
        public function setApellidoPaterno($apellidoPaterno){$this-> apellidoPaterno= $apellidoPaterno;}
        public function setApellidoMaterno($apellidoMaterno){$this-> apellidoMaterno= $apellidoMaterno;}
        public function setPuntuacion($puntuacion){$this-> puntuacion=$puntuacion;}
        public function setCelular($celular){$this-> celular=$celular;}
        public function setEstado($estado){$this->estado=$estado;}
        public function setLimiteHoras($limiteHoras){$this-> limiteHoras=$limiteHoras;}
        public function setIdUsuario($idUsuario){$this-> idUsuario=$idUsuario;}


        public function getId()             {return $this-> id;}
        public function getNombre()         {return $this-> nombre;}
        public function getApellidoPaterno(){return $this-> apellidoPaterno;}
        public function getApellidoMaterno(){return $this-> apellidoMaterno;}
        public function getPuntuacion()          {return $this-> puntuacion;}
        public function getCelular()        {return $this-> celular;}
        public function getEstado()         {return $this->estado;}
        public function getLimiteHoras()    {return $this-> limiteHoras;}
        public function getIdUsuario()      {return $this-> idUsuario;}

        public function __contruct(){
            parent::__construct();
        }

        public function save(){
            try {
                $query=$this->prepare('INSERT INTO docentes (nombre, apellidoPaterno, apellidoMaterno, celular, estado, limiteHoras,puntuacion, idUsuario) VALUES (:nombre, :apellidoPaterno, :apellidoMaterno, :celular, 1, :limiteHoras, :puntuacion, :idUsuario)');
                $query->execute(
                    [
                        'nombre' => $this->nombre, 
                        'apellidoPaterno' => $this->apellidoPaterno, 
                        'apellidoMaterno' => $this->apellidoMaterno, 
                        'celular' => $this->celular, 
                        'limiteHoras' => $this->limiteHoras, 
                        'puntuacion' => $this->puntuacion, 
                        'idUsuario' => $this->idUsuario
                    ]);
                if ($query->rowCount()) return true;
                return false;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function getAll(){
            $items=[];
            try {
                $query=$this->query('SELECT * FROM dbhorarios.docentes');
                if ($query===false){
                    error_log('USERMODEL::getAll->Error en la consulta SQL');
                    return $items;
                }
                while($p=$query->fetch(PDO::FETCH_ASSOC)){
                    $item = new DocentesModel();
                    $item -> setId($p['id']);
                    $item -> setNombre($p['nombre']);
                    $item -> setApellidoPaterno($p['apellidoPaterno']);
                    $item -> setApellidoMaterno($p['apellidoMaterno']);
                    $item -> setPuntuacion($p['puntuacion']);
                    $item -> setCelular($p['celular']);
                    $item -> setEstado($p['estado']);

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

        public function get($id){
            try {
                $query=$this->prepare('SELECT * FROM docentes WHERE id=:id');
                $query->execute(
                    [
                        'id' => $id 
                    ]);
                $docentes = $query->fetch(PDO::FETCH_ASSOC);
                $this->from($docentes);
                return $this;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function delete($id){
            try {
                $query=$this->prepare('UPDATE docentes SET estado=0 WHERE id=:id');
                $query->execute([
                        'id' => $id
                    ]);
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function update(){
            try {
                $query=$this->prepare('UPDATE docentes SET nombre = :nombre, apellidoPaterno=:apellidPaterno, apellidoMaterno=:apellidoMaterno, email=:email, celular=:celular, limiteHoras=:limiteHoras, idUsuario=:idUsuario WHERE id=:id');
                $query->execute(
                    [
                        'nombre' => $this->nombre, 
                        'apellidoPaterno' => $this->apellidoPaterno, 
                        'apellidoMaterno' => $this->apellidoMaterno, 
                        'email' => $this->email, 
                        'celular' => $this->celular, 
                        'limiteHoras' => $this->limiteHoras, 
                        'idUsuario' => $this->idUsuario,
                        'id'=>$this->id
                    ]);
                if ($query->rowCount()) return true;
                return false;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function from($array){
            $this->id=$array['id'];
            $this->nombre=$array['nombre'];
            $this->apellidoPaterno=$array['apellidoPaterno'];
            $this->apellidoMaterno=$array['apellidoMaterno'];
            $this->email=$array['email'];
            $this->celular=$array['celular'];
            $this->limiteHoras=$array['limiteHoras'];
            $this->idUsuario=$array['idUsuario'];

        }

        public function getAllByUserId($idUsuario){
            $items=[];
            try {
                $query=$this->prepare('SELECT * FROM docentes WHERE idUsuario=:idUsuario');
                $query->execute(
                    [
                        'idUsuario' => $idUsuario
                    ]);
                while ($p = $query->fetch(PDO::FETCH_ASSOC)) {
                    $item = new DocentesModel();
                    $item->from($p);
                    array_push($items,$item);
                }
                return $items;
            } catch (PDOException $e) {
                return [];
            }
        }
    }