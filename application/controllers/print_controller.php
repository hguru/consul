<?php
class Home extends Controller {

 function Home(){
  parent::Controller();
  $this->load->model('HomeModel');

 }


 public function index(){

  $query = $this->HomeModel->getEmployees();
  $data['EMPLOYEES'] = null;
  if($query){
   $data['EMPLOYEES'] =  $query;
  }

  $this->load->view('index.php', $data);
 }
}
?>