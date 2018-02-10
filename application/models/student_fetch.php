<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Student_fetch extends CI_Model { 
function __construct() 
{ 
//call model constructor 
parent::__construct(); 
} 
function fetchtable() 
{ 
$query = $this->db->get('student_details'); 
return $query->result(); 
} 
} 
?>