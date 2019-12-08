<?php
defined('BASEPATH') or exit('No direct script access allowed');

class subjek extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_course');
    }
    
    public function index()
    {
        // $data_subject = $this->M_subject->GetSubject();
        $this->load->view('subjek-navbar');
        $this->load->view('subjek');
        $this->load->view('footer');
    }
}
