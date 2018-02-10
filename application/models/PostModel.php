
<?php
class PostModel extends CI_Model {
function getPosts(){
  $this->db->select(“cardno,surname,other_names”);
  $this->db->from(‘personal_info’);
  $query = $this->db->get();
  return $query->result();
}
}
?>
