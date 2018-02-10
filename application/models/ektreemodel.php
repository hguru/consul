<?php
class Ektreemodel extends CI_Model
{
public function get_users()
{
$this->db->select('*');
$this->db->from('registration');
$query = $this->db->get();
return $query;
}
}
?>
?>