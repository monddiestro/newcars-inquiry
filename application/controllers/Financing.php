<?php
/**
 *
 */
class Financing extends CI_Controller
{

  function __construct()
  {
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    parent::__construct();
  }

  function push_initial() {

    $name = $this->input->post('name');
    $eadd = $this->input->post('eadd');
    $contact = $this->input->post('contact');

    $data = array (
      'name' => $name,
      'email' => $eadd,
      'contact' => $contact,
      'date' => date('Y-m-d H:i:s')
    );

    $this->load->model('financing_model');
    echo $this->financing_model->push_initial($data);

  }

  function push_vehicle() {

    $id = $this->input->post('financing_id');
    $model = $this->input->post('model');
    $price = $this->input->post('price');
    $type = $this->input->post('type');
    $downpayment = $this->input->post('downpayment');
    $purpose = $this->input->post('loan_purpose');
    $term = $this->input->post('term');
    $loan  = $this->input->post('loan');

    $data = array(
      'model' => $model,
      'price' => $price,
      'type' => $type,
      'downpayment' => $downpayment,
      'term' => $term,
      'purpose' => $purpose,
      'amount'  => $loan,
    );

    $this->load->model('financing_model');
    $this->financing_model->push_update($data,$id);

  }

  function push_creditinfo() {

    $id = $this->input->post('financing_id');
    $income = $this->input->post('income');
    $expense = $this->input->post('expense');
    $bank = $this->input->post('bank');
    $emp_stat = $this->input->post('emp_stat');

    $data = array(
      'income' => $income,
      'expense' => $expense,
      'bank' => $bank,
      'emp_status' => $emp_stat
    );

    $this->load->model('financing_model');
    $this->financing_model->push_update($data,$id);

  }

  function push_personal() {
    $id = $this->input->post('financing_id');
    $bday = $this->input->post('bday');
    $gender = $this->input->post('gender');
    $citizenship = $this->input->post('citizenship');
    $dependants = $this->input->post('dependents');
    $time_call = $this->input->post('time_call');
    $address  = $this->input->post('address');

    $data = array(
      'bday' => $bday,
      'gender' => $gender,
      'citizenship' => $citizenship,
      'dependents' => $dependants,
      'address'  => $address,
      'time_call' => $time_call
    );

    $this->load->model('financing_model');
    $this->financing_model->push_update($data,$id);

  }

  function pull_data() {

    $this->load->model('financing_model');
    $data["inquiries"] = $this->financing_model->pull_from_db();

    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('financing',$data);
    $this->load->view('script');
    $this->load->view('footer');

  }

}
