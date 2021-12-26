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
				if ($this->ion_auth->logged_in()){
					$eventtype = $this->input->post('eventtype');
					$eventtype = ($eventtype == 'one') ? false : true ;
					$data = array(
						"eventname" => $this->input->post('eventname'),
						"eventlocation" => $this->input->post('eventlocation'),
						"eventdescription" => $this->input->post('eventdescription'),
						"eventlink" => $this->input->post('eventlink'),
						"eventtype" => $eventtype,
						"startdate" => date('Y-m-d H:i:s', strtotime($this->input->post('startdate'))),
						"enddate" => date('Y-m-d H:i:s', strtotime($this->input->post('enddate'))),
					);

					$this->event_model->save_event($data);
					// /$this->session->set_flashdata('message_success_contrato', 'Contrato Cadastrado com Sucesso.');
					redirect('event');
				}else{
					$this->session->set_flashdata('message', 'Acesso negado.');
					redirect("login", 'refresh');
				}
				break;
			default:
				if ($this->ion_auth->logged_in()){
					$this->load->view('templates/header');
					$this->load->view('templates/menu');
					$data = array("eventtype" => $this->input->get('t'));
					$this->load->view('newevent/page-add-event', $data);
					$this->load->view('templates/footer');
				} else{
					$this->session->set_flashdata('message', 'Acesso negado.');
					redirect("login", 'refresh');
				}
		}
	}
}
