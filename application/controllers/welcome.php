<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
public $data;
public function __construct()
{//Core controller constructor
parent::__construct();
$this->load->model('ektreemodel');				
}
public function fetchdata()
{
$data['fetchdata']=$this->ektreemodel->get_users();
$this->load->view('fetchangulardata',$data);
}
}
?>