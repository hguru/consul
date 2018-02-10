<?php

public function testing(){
        $this->load->library('Pdf');
        $this->load->model('newModel');
        $data['accounts'] = $this->newModel->get('users');
        $this->load->view('admin/testing',$data);
    }
	
	?>