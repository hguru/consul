<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Student_view extends CI_Controller { 
public function __construct() 
{ 
parent::__construct(); 
//calling model 
$this->load->model("Student_fetch", "a"); 
} 
public function index()
{ 
$this->load->view("view_data"); 
} 
} 
?>