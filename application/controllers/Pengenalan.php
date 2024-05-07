<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pengenalan extends CI_Controller {
  public function index() {
    // Set the title
    $this->template->title = "Welcome!";

    // Load a view in the content partial
    $data = array();
    $this->template->content->view('templates\default\template', $data );

    // Publish the template
    $this->template->publish();
  }
}

/* End of file Pengenalan.php */
/* Location: ./application/controllers/Pengenalan.php */