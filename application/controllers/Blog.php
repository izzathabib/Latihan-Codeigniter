<?php if ( ! defined('BASEPATH'))
exit('No direct script access allowed');
class Blog extends CI_Controller {
  function __construct() {
    parent::__construct();
  }
  function index() {
    $data['todo_info'] = array(
      'tarikh'=>'20/05/2019',
      'hari'=>'Rabu',
      'kategori'=>'Umum'
    );

    $data['todo_list'] = array(
      array( 'id'=>1, 'perkara'=>"Pasangan Codeigniter", 'status'=>"1"),
      array( 'id'=>2, 'perkara'=>"Pengenalan Codeigniter", 'status'=>"1"),
      array( 'id'=>3, 'perkara'=>"Codeigniter Controller", 'status'=>"1"),
      array( 'id'=>4, 'perkara'=>"Codeigniter View", 'status'=>"0"),
    );

    $data['title'] = "My Real Title";
    $data['heading'] = "My Real Heading";

    $this->load->view('blogview',$data);
    
  }

  function komen() {
    echo "Ini adalah fungsi komen";
  }

  function paparan($tajuk,$siri) {
    echo "nama tajuk:".$tajuk."<br/>";
    echo "no siri:".$siri;
  }

  function form() {
    //Upload form helper
    $this->load->helper('form');
  }
}
/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */