<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Hitung extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->helper(array('url','form')); //load helper
  }
  function index() {
    $this->load->view('hitung/menu_hitung');
  }
  function pendaraban() {
    $this->load->library('form_validation');//load form_validation library
    $this->form_validation->set_rules('v1','Variabel 1','required|integer');
    $this->form_validation->set_rules('v2','Variabel 2','required|integer');

    if ($this->form_validation->run()) {
      $data['v1']=(int)$this->input->post('v1',true);
      $data['v2']=(int)$this->input->post('v2',true);
      $data['hasil']=$data['v1']*$data['v2'];

    } else {

      $data['v1']=0;
      $data['v2']=0;
      $data['hasil']=0;

    }
    $this->load->view('hitung/pendaraban',$data);
  }
  function pembahagian() {
    $this->load->library('form_validation');//load form_validation library
    $this->form_validation->set_rules('v1','Variabel 1','required|is_natural_no_zero');
    $this->form_validation->set_rules('v2','Variabel 2','required|is_natural_no_zero');

    if ($this->form_validation->run()) {
      $data['v1']=(int)$this->input->post('v1',true);
      $data['v2']=(int)$this->input->post('v2',true);
      $data['hasil']=$data['v1']/$data['v2'];
    } else {
      $data['v1']=0;
      $data['v2']=0;
      $data['hasil']=0;
    }
    $this->load->view('hitung/pembahagian',$data);
  }
}
/* End of file Hitung.php */
/* Location: ./application/controllers/Hitung.php */