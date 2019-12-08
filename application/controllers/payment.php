<?php
defined('BASEPATH') or exit('No direct script access allowed');

class payment extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_course');
        $this->load->model('M_subject');
    }
    
    public function index()
    {
        // $data_subject = $this->M_subject->GetSubject();
        $this->load->view('payment-navbar');
        $this->load->view('payment');
        $this->load->view('footer');
    }

    public function payment($course_id)
	{
		// $data_subject = $this->M_subject->GetSubject();
		$data['course'] = $this->M_course->GetDetailCourse($course_id);
		$this->load->view('payment-navbar');
		$this->load->view('payment', $data);
		$this->load->view('footer');
    }
    
    public function doPayment($user_id){
        $POST = $this->input->post();

        $data = array(
            'user_id' => $user_id,
            'course_id' => $POST['course_id']
        );

        $temp = $this->M_course->beli_course($data);

        print_r($data);

        // var_dump($data);
    }
}