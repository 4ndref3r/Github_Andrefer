<?php
    class AulasModel extends Model{
        private $id;
        private $nombre;
        private $capacidad;
        private $tipo;
        private $estado;
        private $idUsuario;
          
        public function setId($id){$this-> id=$id;}
        public function setNombre($nombre){$this-> nombre= $nombre;}
        public function setCapacidad($capacidad){$this-> capacidad= $capacidad;}
        public function setEstado($estado){$this->estado=$estado;}
        public function setTipo($tipo){$this->tipo=$tipo;}
        public function setIdUsuario($idUsuario){$this-> idUsuario=$idUsuario;}


        public function getId()             {return $this-> id;}
        public function getNombre()         {return $this-> nombre;}
        public function getCapacidad(){return $this-> capacidad;}
        public function getEstado()         {return $this->estado;}
        public function getTipo()         {return $this->tipo;}
        public function getIdUsuario()      {return $this-> idUsuario;}

        public function __contruct(){
            parent::__construct();
        }

        public function save(){
            try {
                $query=$this->prepare('INSERT INTO aulas (nombre, capacidad, tipo, estado, idUsuario) VALUES (:nombre, :cantidad, :tipo, 1, :idUsuario)');
                $query->execute(
                    [
                        'nombre' => $this->nombre, 
                        'capacidad' => $this->capacidad, 
                        'tipo' => $this->tipo,
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
                $query=$this->query('SELECT * FROM dbhorarios.aulas');
                if ($query===false){
                    error_log('USERMODEL::getAll->Error en la consulta SQL');
                    return $items;
                }
                while($p=$query->fetch(PDO::FETCH_ASSOC)){
                    $item = new AulasModel();
                    $item -> setId($p['id']);
                    $item -> setNombre($p['nombre']);
                    $item -> setCapacidad($p['capacidad']);
                    $item -> setEstado($p['estado']);
                    $item -> setTipo($p['tipo']);
                    $item -> setIdUsuario($p['idUsuario']);

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