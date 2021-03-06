<?php
/**
 *
 */
class Subscribe extends CI_Controller
{

  function __construct()
  {
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    parent::__construct();

  }


  function push_data() {

    $this->load->model('subscribe_model');
    $this->load->library('aws');

    $email = $this->input->post('eadd');

    $data = array(
      'email' => $email,
      'date' => date('Y-m-d H:i:s')
    );

    $this->subscribe_model->save_data($data);

    $subject = "New Cars Showroom Email Subscriber";
    $htmlbody = "Good day! Please add this email(". $email .") to our newsletter subscriber list<br/>Thanks!";
    $recipient = "cj.tria@carmudi.com.ph";
    $sender = "reymond.diestro@carmudi.com.ph";
    $this->aws->sendMailUsingSES($subject,$htmlbody,$recipient,$sender);

  }

}
