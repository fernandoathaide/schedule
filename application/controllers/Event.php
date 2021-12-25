<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model(['event_model']);
		$this->load->database();
        $this->load->helper('url', 'form');
        $this->load->library(['ion_auth', 'form_validation']);
		if ($this->ion_auth->logged_in())
        {
            $this->acesso = TRUE;
        }
    }

	public function index(){
		if ($this->ion_auth->logged_in())
		{
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('newevent/page-new-event');
			$this->load->view('templates/footer');
		} else
		{
			$this->session->set_flashdata('message', 'Acesso negado.');
			redirect("login", 'refresh');
		}
	}
	public function GetAllEvent(){}
	public function GetEventById(){}
	public function addEvent(){
		$action = $this->input->get('action');
		switch ($action) {
			case 'save':
				$eventname = $this->input->post('eventname');
				$eventlocation = $this->input->post('eventlocation');
				$eventdescription = $this->div->post('eventdescription');
				$eventlink = $this->input->post('eventlink');
				$eventtype = true;
				echo ("<script>alert('$eventname | $eventlocation | $eventdescription | $eventlink | $eventtype ');</script>");
				break;
			default:
				if ($this->ion_auth->logged_in()){
					$this->load->view('templates/header');
					$this->load->view('templates/menu');
					$this->load->view('newevent/page-add-event');
					$this->load->view('templates/footer');
				} else{
					$this->session->set_flashdata('message', 'Acesso negado.');
					redirect("login", 'refresh');
				}
		}
	}
}
