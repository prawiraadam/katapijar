<?php
defined('BASEPATH') or exit('No direct script access allowed');

class subjek extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_course');
        $this->load->model('M_subjek');
    }
    
    public function index()
    {
        // $data_subject = $this->M_subject->GetSubject();
        $this->load->view('course-navbar');
        $this->load->view('course');
        $this->load->view('footer');
    }

    
}