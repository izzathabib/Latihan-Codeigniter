<?php

class Pelajar extends CI_Controller {
  private $limit=10;

  function __construct() {
    parent::__construct();
    #load all library and helper needed
    $this->load->model("Pelajar_model","",TRUE);
    $this->load->helper(array ("form", "url"));
    $this->load->library("form_validation");
  }

  function index($offset=0,$order_column="id", $order_type= "asc") {

    if (empty($offset)) $offset=0;
    if (empty($order_column)) $order_column= "id";
    if (empty($order_type)) $order_type= "asc";

    $data['offset'] = $offset;
    // Assign new order
    // Obviously opposite from the current order
    $data['new_order'] = $order_type=='asc'?'desc':'asc';

    //load data pelajar
    $data['pelajars']= $this->Pelajar_model->get_paged_list($this->limit,$offset,$order_column,$order_type);

    //Generate pagination
    $this->load->library('pagination');
    $config['base_url']= site_url('pelajar/index/');
    $config['total_rows']=$this->Pelajar_model->count_all();
    $config['per_page']=$this->limit;
    $config['uri_segment']=3;
    $this->pagination->initialize($config);
    $data['pagination']=$this->pagination->create_links();

    if ($this->uri->segment(3)=='delete_success')
      $data['message']='<span class="label success">Data berhasil dihapus</span>';
    else if ($this->uri->segment(3)=='add_success')
      $data['message']='<span class="label success">Data berhasil ditambah</span>';
    else
      $data['message']='';
    // load view
    $this->load->view('pelajar/pelajarList',$data);
  }

  function add() {
    // set common properties
    $data['title']='Tambah pelajar baru';
    $data['action']= site_url('pelajar/add');                              #The way CI define class for css
    $data['link_back']= anchor('pelajar/index/','Back to list of pelajars',array('class'=>'back'));
    $this->_set_rules();

    //Run validation on the data added
    if ($this->form_validation->run()=== FALSE){
      $data['message']= '';
      //set common properties
      $data['title']= 'Add new pelajar';
      $data['message']='';
      $data['pelajar']['id']= '';
      $data['pelajar']['nama']= '';
      $data['pelajar']['alamat']= '';
      $data['pelajar']['jantina']= '';
      $data['pelajar']['terikh_lahir']= '';
      $data['link_back']=anchor('Pelajar/index/','Lihat Daftar Pelajar',array('class'=>'back'));
      
      $this->load->view('pelajar/pelajarEdit',$data);
    } else {
      //Save data
      $pelajar= array(
        'nama'=> $this->input->post('nama'),
        'alamat'=> $this->input->post('alamat'),
        'jantina'=> $this->input->post('jantina'),
        'tarikh_lahir'=> date('Y-m-d',strtotime($this->input->post('tarikh_lahir'))),
      );

      $id = $this->Pelajar_model->save($pelajar);
      // set form input nama="id"
      $this->validation->id =$id;
      redirect('pelajar/index/add_success');
    }
  }

  function view($id) {
    // set common properties
    $data['title']='pelajar Details';
    $data['link_back']= anchor('pelajar/index/','Lihat daftar pelajars',array('class'=>'back'));
    // get pelajar details
    $data['pelajar']=$this->Pelajar_model->get_by_id($id);
    // load view
    $this->load->view('pelajar/pelajarView',$data);
  }

  function update($id) {
    // set common properties
    $data['title']='Update pelajar';
    $this->load->library('form_validation');
    // set validation properties
    $this->_set_rules();
    $data['action']=('pelajar/update/'.$id);

    // run validation
    if ($this->form_validation->run()=== FALSE){
      $data['message']='';
      $data['pelajar']=$this->Pelajar_model->get_by_id($id);
      $_POST['jantina']=strtoupper($data['pelajar']['jantina']);
      $data['pelajar']['tarikh_lahir']= date('d-m-Y',strtotime($data['pelajar']['tarikh_lahir']));
      // set common properties
      $data['title']='Update pelajar';
      $data['message']='';
    } else {
      //Save data
      $id=$this->input->post('id');
      $pelajar= array(
        'nama'=>$this->input->post('nama'),
        'alamat'=>$this->input->post('alamat'),
        'jantina'=>$this->input->post('jantina'),
        'tarikh_lahir'=> date('Y-m-d',strtotime($this->input->post('tarikh_lahir')))
      );
      $this->Pelajar_model->update($id,$pelajar);
      $data['pelajar']= $this->Pelajar_model->get_by_id($id);
      // set user message
      $data['message']='<span class="label success">Kemaskini Pelajar Berjaya</span>';
    }
    $data['link_back']= anchor('pelajar/index/','Lihat daftar pelajar',array('class'=>'back'));
    // load view
    $this->load->view('pelajar/pelajarEdit',$data);
  }

  function delete($id){
    // delete pelajar
    $this->Pelajar_model->delete($id);
    // redirect to pelajar list page
    redirect('pelajar/index/delete_success','refresh');
  }

  // validation rules
  function _set_rules(){
    $this->form_validation->set_rules('nama','Nama','required|trim');
    $this->form_validation->set_rules('jantina','Password','required');
    $this->form_validation->set_rules('alamat','Alamat','required');
    $this->form_validation->set_rules('tarikh_lahir','Tarikh Lahir','required|callback_valid_date');
  }

  //data_validation callback
  function valid_date($str){
    if(!preg_match('/^[0-9]{2}-[0-9]{2}-[0-9]{4}$/',$str)){
      $this->form_validation->set_message('valid_date','date format is not valid. dd-mm-yyyy');
      return false;
    } else {
      return true;
    }
  }
}
/* End of file Pelajar.php */
/* Location: ./application/controllers/Pelajar.php */