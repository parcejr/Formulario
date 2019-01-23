<?php

    class Ejecutar extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('Data_base');
        }
           
        public function index(){
            //$this->load->model('campos');
            $this->load->view('Formulario/formulario.php');
        } 

        public function cargar_datos(){
            // $datosTabla = $this->db->get('campos');
            // var_dump($datosTabla->result());
            // $datosTabla1 = $datosTabla -> result();             
            // var_dump($datosTabla1);
            $datos_tabla = $this->Data_base->mostrar();
            $datos['arreglo'] = $datos_tabla -> result_array();
            $this->load->view('Formulario/tabla.php', $datos);
        }
        public function guardar()
        {
            $form[0] = $this->input->post('nombre');
            $form[1] = $this->input->post('edad');
            $form[2] = $this->input->post('email');
            $form[3] = $this->input->post('telefono');
            $form[4] = $this->input->post('direccion');
            $form[5] = $this->input->post('celular');
            $form[6] = $this->input->post('area_trabajo');
            $this->Data_base->guardarCI($form);
            header('location:cargar_datos');
            //var_dump($form);
            //ver_tabla();
            //header('location:http://localhost/Formulario/');
        }
        public function actualizar(){
            $actualizar[0] = $this->input->post('id');
            $actualizar[1] = $this->input->post('nombre');
            $actualizar[2] = $this->input->post('edad');
            $actualizar[3] = $this->input->post('email');
            $actualizar[4] = $this->input->post('telefono');
            $actualizar[5] = $this->input->post('direccion');
            $actualizar[6] = $this->input->post('celular');
            $actualizar[7] = $this->input->post('area_trabajo');
            $this->Data_base->actualizarCI($actualizar);
            header('location:/../Formulario/index.php/Ejecutar/cargar_datos');
        }
        public function eliminar($id){
            //echo "eliminado el id es $id";
            $this->Data_base->eliminando_tabla($id);
            header('location:/../Formulario/index.php/Ejecutar/cargar_datos');
    
        }
        public function editar($id){
            echo "eliminado el id es $id";
        }
    }


