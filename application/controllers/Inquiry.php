<?php
/**
 *
 */
class Inquiry extends CI_Controller
{
  // function __construct(argument)
  // {
  //   // code...
  // }
  function push_data(){

    $lname = $this->input->get('lname');
    $fname = $this->input->get('fname');
    $contact = $this->input->get('contact');
    $eadd = $this->input->get('eadd');
    $address = $this->input->get('address');
    $message = $this->input->get('message');
    $buy_range = $this->input->get('buy_range');
    $bank_loan = $this->input->get('bank_loan');
    $contact_alt = $this->input->get('contact_alt');
    $time_call = $this->input->get('time_call');
    $model = $this->input->get('model');
    $source  = $this->input->get('source');

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
