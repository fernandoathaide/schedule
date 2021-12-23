<?php
/*
ATENCAO: a tag php deve ser removida antes de gerar pela CLI.
Controller gerada automaticamente, deve ser editada para correto funcionamento.
Para saber mais: https://www.codeigniter.com/user_guide/general/controllers.html
*/

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('dashboard_model');
        $this->load->database();
        $this->load->helper('url', 'form');
        $this->load->library(['ion_auth', 'form_validation']);

        if ($this->ion_auth->logged_in())
        {
            $this->acesso = TRUE;
        }
    }

    public function index()
    {
        //$data['lista_dashboard'] = $this->dashboard_model->get_dashboard();

        if ($this->ion_auth->logged_in())
        {
            $this->load->view('templates/header');
            $this->load->view('templates/menu');
            $this->load->view('usr/dashboard');
            $this->load->view('templates/footer');
        }
        else
        {
        $this->session->set_flashdata('message', 'Acesso negado.');
        redirect("login", 'refresh');
        }
    }

    // public function details($unique = NULL, $message = FALSE)
    // {
    //     $data['dashboard'] = $this->dashboard_model->get_dashboard($unique);
    //     $data['message'] = $message;

    //     if (empty($data['dashboard']))
    //     {
    //             show_404();
    //     }
        
        
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/menu', $data);
    //     $this->load->view('dashboard/details',$data);
    //     $this->load->view('templates/footer');
    // }

    // public function create()
    // {
    //     $this->load->helper('form');
    //     $this->load->library('form_validation');

    //     $this->form_validation->set_rules('CAMPO_1', 'Campo 1', 'required');
    //     $this->form_validation->set_rules('CAMPO_2', 'Campo 2', 'required');

    //     if ($this->form_validation->run() === FALSE)
    //     {
    //         $this->load->view('templates/header');
    //         $this->load->view('dashboard/create');
    //         $this->load->view('templates/footer');

    //     }
    //     else
    //     {
    //         $id = $this->dashboard_model->set_dashboard();
    //         $this->details($id, "dashboard criada com sucesso!");
    //     }
    // }

}