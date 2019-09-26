<?php
class Convenio extends CI_Controller{
    /*
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form','url'));
        $this->load->model(array('Session_model','_scolar/Convenio_rework_model'));
        /*$idmodule=116;*/
     
        /*
        $this->user = $this->session->userdata('idUser');
        $this->campus = $this->Session_model->getcampus($this->user)->idCampus;
    }*/

    public function index(){
        $this->load->helper(array('form','url'));
        $this->load->model('Convenio_model');
        $result['campus']=$this->Convenio_model->getCampus();
        $this->load->view('convenio_view', $result);
    }

    public function agregar(){
        if(!empty($_POST)){
			
		}
    }

    public function detalles(){
        if(!empty($_POST)){
            $a = $this->Convenio_model->getDetails($_POST);
            if(!empty($a)){
                echo json_encode($a);
            }
		}
    }

    public function convenio_table(){
        if(!empty($_POST)){
            $a = $this->Convenio_model->getInfo($_POST["id"]);
            if(!empty($a)){
                echo json_encode($a);
            }
		}
    }

}
?>