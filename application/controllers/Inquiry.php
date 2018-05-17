<?php
/**
 *
 */
class Inquiry extends CI_Controller
{

  function __construct()
  {
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    parent::__construct();
  }
  
  function push_data(){

    $lname = $this->input->post('lname');
    $fname = $this->input->post('fname');
    $contact = $this->input->post('contact');
    $eadd = $this->input->post('eadd');
    $address = $this->input->post('address');
    $message = $this->input->post('message');
    $buy_range = $this->input->post('buy_range');
    $bank_loan = $this->input->post('bank_loan');
    $contact_alt = $this->input->post('contact_alt');
    $time_call = $this->input->post('time_call');
    $model = $this->input->post('model');
    $source  = $this->input->post('source');

    $data = array(
      'lname' => $lname,
      'fname' => $fname,
      'contact' => $contact,
      'eadd' => $eadd,
      'address' => $address,
      'message' => $message,
      'buy_range' => $buy_range,
      'bank_loan' => $bank_loan,
      'contact_alt' => $contact_alt,
      'time_call' => $time_call,
      'model' => $model,
      'source'  => $source
    );

    $this->load->model('inquiry_model');
    echo $this->inquiry_model->push_to_db($data);

  }

}
