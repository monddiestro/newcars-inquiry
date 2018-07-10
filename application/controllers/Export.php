<?php
/**
 *
 */
class Export extends CI_Controller
{

  function get_report(){

    $from = $this->input->get('from');
    $to = $this->input->get('to');

    $from_explode = explode("/",$from);
    $to_explode = explode("/",$to);

    $from = $from_explode[2] . "-" . $from_explode[0] . "-" . $from_explode[1];
    $to = $to_explode[2] . "-" . $to_explode[0] . "-" . $to_explode[1];

    $this->load->dbutil();
    $this->load->model('inquiry_model');
    $query = $this->inquiry_model->export_data($from,$to);

    $csv = $this->dbutil->csv_from_result($query);

    $this->load->helper('download');

    $data = $csv;
    $name = 'report-date-('.$from.')-('.$to.').csv';
    force_download($name, $data);

  }

  function get_report_financing() {
    $from = $this->input->get('from');
    $to = $this->input->get('to');

    $from_explode = explode("/",$from);
    $to_explode = explode("/",$to);

    $from = $from_explode[2] . "-" . $from_explode[0] . "-" . $from_explode[1];
    $to = $to_explode[2] . "-" . $to_explode[0] . "-" . $to_explode[1];

    $this->load->dbutil();
    $this->load->model('financing_model');
    $query = $this->financing_model->export_data($from,$to);

    $csv = $this->dbutil->csv_from_result($query);

    var_dump($csv);


    // $this->load->helper('download');
    //
    // $data = $csv;
    // $name = 'financing-('.$from.')-('.$to.').csv';
    // force_download($name, $data);

  }

}
