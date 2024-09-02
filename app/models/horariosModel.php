<?php
    class HorariosModel extends Model{
        private $id;
        private $institucionId;
        private $nombre;
        private $fechaInicio;
        private $fechaFin;
        private $aulasFijas;
        private $idUsuario;
          
        public function setid($id)          {$this-> id=$id;}
        public function setinstitucionId($institucionId){$this-> institucionId= $institucionId;}
        public function setnombre($nombre){$this-> nombre= $nombre;}
        public function setfechaInicio($v){$this-> fechaInicio= $fechaInicio;}
        public function setfechaFin($fechaFin)      {$this-> fechaFin=$fechaFin;}
        public function setaulasFijas($aulasFijas){$this-> aulasFijas=$aulasFijas;}
        public function setidUsuario($aidUsuarios){$this-> idUsuario=$idUsuario;}

        public function getid()     {return $this-> id;}
        public function getinstitucionId(){return $this-> institucionId;}
        public function getnombre(){return $this-> nombre;}
        public function getfechaInicio(){return $this-> fechaInicio;}
        public function getfechaFin()   {return $this-> fechaFin;}
        public function getaulasFijas(){return $this-> aulasFijas;}
        public function getidUsuario(){return $this-> idUsuario;}

        public function __contruct(){
            parent::__construct();
        }

        public function save(){
            try {
                $query=$this->prepare('INSERT INTO horarios () VALUES ()')
            } catch (PDOException $e) {
                return false;
            }
        }

        public function getAll(){
            try {
                //code...
            } catch (PDOException $th) {
                //throw $th;
            }
        }


    }