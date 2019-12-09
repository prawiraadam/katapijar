<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_akun');
        $this->load->model('M_profile');
        $this->load->model('M_course');
    }

    public function index($user_id)
    {
        // $data_subject = $this->M_subject->GetSubject();
        $data['course'] = $this->M_course->Get_CourseOwns($user_id);
        $data['profil'] = $this->M_profile->Get_Profile($user_id);
        $this->load->view('profile-navbar');
        $this->load->view('profile', $data);
        $this->load->view('footer');
    }

    public function login_action()
    {
        $POST = $this->input->post();

        $errors = array();
        // print_r($POST);
        // die;
        $data = array(
            'email' => $POST['email'],
            // 'password' => $POST['password']
            'password' => md5($POST['password'])
        );
        // if (empty($data['email'])) {
        //     array_push($errors, "Username is required");
        // }
        // if (empty($data['password'])) {
        //     array_push($errors, "Password is required");
        // }
        if (count($errors) == 0) {
            $cek =  $this->M_akun->cek_login($data);
            if ($cek) {
                $user = $this->M_akun->get_username($data);
                // var_dump($user);
                // die;
                $data_session = array(
                    'email' => $data['email'],
                    'username' => $user->username,
                    'user_id' => $user->user_id,
                    'status' => "user"
                );
                $this->session->set_userdata($data_session);
                // $message = "Kamu telah berhasil login!";
                // echo "<script type='text/javascript'>alert('$message');</script>";
                redirect(site_url('home/index'));
            } else {
                // $message = "Email atau Password salah";
                // echo "<script type='text/javascript'>alert('$message');</script>";
                redirect(site_url("subjek"));
            }
        }
    }

    public function registration_action()
    {
        $POST = $this->input->post();

        $errors = array();
        $data = array(
            'u_name' => $POST['name'],
            'email' => $POST['email'],
            'password' => md5($POST['password']),
            'conf_password' => md5($POST['conf_password'])
        );
        if ($data['password'] != $data['conf_password']) {
            array_push($errors, "");
            $message = "Kedua password tidak sama";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user = $this->M_akun->cek_regis($data);

        if ($user) { // if user exists
            if ($user['email'] === $email) {
                array_push($errors, "");
                $message = "Email telah tersedia";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        }
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            // $pass1 = md5($pass1);//encrypt the password before saving in the database
            $this->M_akun->insert_user($data);
            // $message = "Terima kasih telah mendaftar, silakan login!";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            redirect('home/signIn');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('home'));
    }
}
