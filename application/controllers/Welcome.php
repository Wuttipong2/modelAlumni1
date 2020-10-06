<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();

	$this->load->model('Alumni','Al');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function showall()
	{
		//$result['alumni'] = $this->Al->getAlumni();
		print_r($this->Al->getAlumni());

	}
	public function insert_al()
	{
		$data = array(
			'al_fname' => "วุฒิพงษ์ ",
			'al_lname' => "โพธิ์งาม",
			'al_age' => "20",
			'al_phone' => "0927312299",
			'al_work' => " ",
			'al_email' => "614259046@webmail.npru.ac.th"
		);
		$this->Al->regAlimni($data);

	}

public function Changework()
	{
	$data = array(
			'al_id' => "1", //ส่วนที่ต้องการเปลี่ยน
			'al_work' => "True Touch" //ส่วนที่ต้องการเปลี่ยน		
	);
	$al_id = "";   //ส่วนอ้างอิงจากตำแหน่ง al_id จากฐานข้อมูล
	$this->Al->updateWork($data,$al_id);
	
	}
	public function Changephone(){
		$data = array(
			'al_phone' => "0871522903"
		);
		$al_id = "1";
		$this->Al->updateContact($data,$al_id);
	}
}
