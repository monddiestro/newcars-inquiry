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
      'eadd' => $eadd,
      'contact' => $contact,
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
    $term = $this->input->post('term');
    $loan  = $this->input->post('loan');

    $data = array(
      'model' => $model,
      'price' => $price,
      'type' => $type,
      'downpayment' => $downpayment,
      'term' => $term,
      'loan'  => $loan,
    );

    $this->load->model('finacing_model');
    $this->financing_model->push_update($data,$id);

  }

  function push_creditinfo() {

    $id = $this->input->post('financing_id');
    $income = $this->input->post('income');
    $expense = $this->input->post('expense');
    $bank = $$this->input->post('bank');

    $data = array(
      'income' => $income,
      'expense' => $expense,
      'bank' => $bank
    );

    $this->load->model('finacing_model');
    $this->financing_model->push_update($data,$id);

  }

  function push_personal() {
    $id = $this->input->post('financing_id');
    $bday = $this->input->post('bday');
    $gender = $this->input->post('gender');
    $citizenship = $this->input->post('citizenship');
    $dependants = $this->input->post('dependants');
    $address  = $this->input->post('address');

    $data = array(
      'bday' => $bday,
      'gender' => $gender,
      'citizenship' => $citizenship,
      'dependants' => $dependants,
      'address'  => $address,
    );

    $this->load->model('finacing_model');
    $this->financing_model->push_update($data,$id);

  }

}