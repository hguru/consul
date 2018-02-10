<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Personal extends CI_Controller {
 
function __construct()
{
        parent::__construct();
 
/* Standard Libraries of codeigniter are required */
$this->load->database();
$this->load->helper('url');
/* ------------------ */ 

$this->load->library('grocery_CRUD');
$this->load->model("login_model");





 


 
}



 
public function index()
{
//echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
die();
}
 




public function personal()
{
$crud = new grocery_CRUD();
$crud->set_table('personal_info');
$crud->columns ('cardno','photo','surname','other_names','gender','date_of_birth','profession','telephone_guinea','passport_no','address_guinea','telephone_nigeria');
//$crud->fields('cardno','surname','other_names','gender','date_of_birth','profession','telephone','passport_no','address_guinea','telephone_nigeria');


$crud->display_as('cardno','Card No');
$crud->display_as('photo','Photo');
$crud->display_as('surname','Surname');
$crud->display_as('gender','Gender');
$crud->display_as('date_of_birth','DoB');
$crud->display_as('profession','Profession');
$crud->display_as('telephone_guinea','Tel. Guinea');
$crud->display_as('passport_no','Passport');
$crud->display_as('address_guinea','Address. in Guinea');
$crud->display_as('telephone_nigeria','Tel. Nigeria');


$crud->required_fields('photo','surname','other_names','gender','date_of_birth','place_of_birth','state_of_origin','town','local_govt_area','passport_date_issue','passport_place_issue','telephone_kin_nigeria','telephone_kin_guinea','telephone_guinea','address_kin','profession','telephone','passport_no','date_issue','place_issue','expire_issue','perm_addr_nigeria','next_kin_nigeria','address_nigeria','telephone_nigeria','date_of_arrival_guinea','address_guinea','next_kin_guinea','address','date_issue_card','date_expire_card');

$crud->set_field_upload('photo','assets/uploads/files');



$output = $crud->render();
 
$this->_example_output($output);        
}
 
function _example_output($output = null)
 
{
$this->load->view('view_personal_info.php',$output);    
}
}
 
/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
 

