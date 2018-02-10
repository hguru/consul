<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Demo extends CI_Controller {
 
function __construct()
{
        parent::__construct();
 
/* Standard Libraries of codeigniter are required */
$this->load->database();
$this->load->helper('url');
/* ------------------ */ 
 
$this->load->library('grocery_CRUD');
 
}

 
public function print_card()
{
 $crud = new grocery_CRUD();

     

$crud->set_table('personal_info');
$crud->columns ('cardno','surname','other_names');
$crud->fields('cardno','surname','other_names');
$crud->unset_add();
$crud->unset_edit();
$crud->unset_delete();

	
$crud->display_as('cardno','Card No');
$crud->display_as('surname','Surnames');
$crud->display_as('other_names','Other Names');

$output = $crud->render();
 
$this->_example_output($output);                
}
 
function _example_output($output = null)
 
{
$this->load->view('print_card.php',$output);    
}    
}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */?>



