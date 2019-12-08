<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_subject');
		$this->load->model('M_course');
		$this->load->model('M_video');
	}

	public function index()
	{
		$data['subject'] = $this->M_subject->getSubject();
		if ($this->session->userdata('status') == 'user') {
			$this->load->view('afterlogin-navbar');
		} else {
			$this->load->view('navbar');
		}
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function signIn()
	{
		// login-navbar.php - login.php - Footer.php
		$this->load->view('login-navbar');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function course($sub_id)
	{
		// login-navbar.php - login.php - Footer.php
		$data['owns'] = $this->M_course->Get_CourseOwns($this->session->userdata('user_id'));
		$data['course'] = $this->M_course->Getcourse($sub_id);
		$this->load->view('course-navbar');
		$this->load->view('course', $data);
		$this->load->view('footer');
	}

	public function subjek($course_id, $num)
	{
		// login-navbar.php - login.php - Footer.php
		$data['video'] = $this->M_video->Get_Video($course_id);
		$data['num'] = $num;
		$this->load->view('subjek-navbar', $data);
		$this->load->view('subjek', $data);
		$this->load->view('subjek-footer');
	}

}
