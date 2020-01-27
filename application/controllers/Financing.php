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
      'expenses' => $expense,
      'bank_rel' => $bank,
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
  
    $page = $this->uri->segment(3);

    $page = empty($page) ? 0 : $page;

    $limit = 50;
    $offset = 0;
    if($page > 1) {
      $offset = ($page -1) * 50;
    }

    echo $lead_cnt = $this->financing_model->pull_count();
    
    $data["inquiries"] = $this->financing_model->pull_from_db($offset,$limit);
    $data["pagination"] = $this->pagination($this->financing_model->pull_count());

    $this->load->view('head');
    $this->load->view('nav');
    if($this->session->has_userdata('login')) {
      $this->load->view('financing',$data);
    } else {
      $this->load->view('login');
    }
    $this->load->view('script');
    $this->load->view('footer');

  }

  function pagination($lead_cnt) {
    $config["base_url"] = base_url('financing/pull_data/');
    $config["total_rows"] = $lead_cnt;
    $config["per_page"] = 50;
    $config['num_links'] = 3;
    $config['attributes'] = array('class' => 'page-link');
    $config['use_page_numbers'] = TRUE;
    $config['full_tag_open'] = '<nav aria-label="Page navigation"><ul class="pagination justify-content-end">';
    $config['full_tag_close'] = '</ul></nav>';
    $config['first_link'] = FALSE;
    $config['last_link'] = FALSE;
    $config['next_link'] = 'Next <i class="fa fa-chevron-right fa-fw ml-2 text-secondary fs-sm"></i>';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '<i class="fa fa-chevron-left grey mr-2 fs-sm"></i> Previous';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    return $this->pagination->create_links();

  }

}
