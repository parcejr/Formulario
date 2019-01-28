<?php
    defined('BASEPATH') OR exit('no se permite');

    class Data_base extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function guardarCI($data){    
            $query =$this->db->query('INSERT INTO campos(nombre,edad,email,telefono,direccion,celular,area_trabajo) VALUES("'.$data[0].'","'.$data[1].'","'.$data[2].'","'.$data[3].'","'.$data[4].'","'.$data[5].'","'.$data[6].'")');
            
            
        }
        public function mostrar(){
            $recibir = $this->db->query('SELECT * FROM campos');
            // $recibir1 = $recibir-> result();
            // var_dump($recibir1);
            return  $recibir->result_array();
        }

        public function datos(){
            $query = $this->db->query('SELECT * FROM campos');
            return $query->result_array();
        }
        public function eliminando_tabla($dato){
            $this->db->query('DELETE FROM campos WHERE id= '.$dato.'');
        }
        public function actualizarCI($datos){
            $this->db->query("UPDATE campos SET nombre='$datos[1]', edad ='$datos[2]',  email ='$datos[3]', telefono='$datos[4]', direccion='$datos[5]', celular='$datos[6]' WHERE id = $datos[0]");           
            
        }
    }   
