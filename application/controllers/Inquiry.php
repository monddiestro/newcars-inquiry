<?php
/**
 *
 */
class Inquiry extends CI_Controller
{

  // function __construct()
  // {
  //   header('Access-Control-Allow-Origin: *');
  //   header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  //   parent::__construct();
  // }

  function push_data(){
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
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
      'name' => $fname,
      'contact' => $contact,
      'eadd' => $eadd,
      'address' => $address,
      'message' => $message,
      'buy_range' => $buy_range,
      'bank_loan' => $bank_loan,
      'contact_alt' => $contact_alt,
      'time_call' => $time_call,
      'model' => $model,
      'source'  => $source,
      'date' => date('Y-m-d H:i:s ')
    );

    $this->load->model('inquiry_model');
    echo $this->inquiry_model->push_to_db($data);

  }

  function pull_data() {

    $this->load->model('inquiry_model');
    $data["inquiries"] = $this->inquiry_model->pull_from_db();

    $this->load->view('head');
    $this->load->view('nav');
    if($this->session->has_userdata('login')) {
      $this->load->view('data',$data);
    } else {
      $this->load->view('login');
    }
    $this->load->view('script');
    $this->load->view('footer');

  }


  function lead_details() {

    $lead_id = $this->uri->segment(3);

    $this->load->model('inquiry_model');
    $data['details'] = $this->inquiry_model->pull_lead_details($lead_id);

    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('details',$data);
    $this->load->view('script');
    $this->load->view('footer');



  }

}
