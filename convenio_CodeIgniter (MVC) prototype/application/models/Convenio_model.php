<?php

Class Convenio_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getCampus(){
		return $this->db->query('SELECT * FROM campus')->result();
	}

	public function getInfo($campus){
		$sql = "SELECT * FROM convenios WHERE campus = ?";
		return $this->db->query($sql, array($campus))->result();
	}

	public function getDetails($idCampus){
		$sql = 'SELECT esc_Career.name FROM esc_Career, esc_career_campus WHERE idCampus = ? AND esc_Career.idCareer = esc_career_campus.idCareer AND esc_Career = 1';
		return $this->db->query($sql, array($idCampus))->result();
	}
}

?>