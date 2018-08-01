<?php
/**
 *
 */
class Login extends CI_Controller
{

  // function __construct(argument)
  // {
  //   // code...
  // }

  function index() {
    $this->load->view('head');
    $this->load->view('nav');
    if($this->session->has_userdata('login')) {
      $this->load->view('home');
    } else {
      $this->load->view('login');
    }
    $this->load->view('script');
    $this->load->view('footer');
  }

  function checkuser() {
    $referer =  $this->input->server('HTTP_REFERER');
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    if($username == "rocket") {
      if($password == "rock4motors") {
        $data = array(
          'login' => 'true'
        );
        $this->session->set_userdata($data);
        redirect(base_url());
      } else {
        $this->session->set_flashdata('result','danger');
        $this->session->set_flashdata('result_message', 'Invalid Password');
        redirect(base_url());
      }
    } else {
      $this->session->set_flashdata('result','danger');
      $this->session->set_flashdata('result_message', 'Invalid Username');
      redirect(base_url());
    }

  }

  function clearuser() {
    $data = array('login');
    $this->session->unset_userdata($data);
    redirect(base_url());
  }

}
