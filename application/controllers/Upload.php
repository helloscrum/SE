<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {
  public function index()
	{
		$this->uploadImage("ing1","picture");
	}
  private function uploadImage($name,$inputName){
		$config['upload_path'] = 'images';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '1920';
		$config['max_width'] = '1920';
		$config['max_height'] = '1920';
		$config['remove_spaces'] = TRUE;
		$config['file_name'] = $name;
		$this->load->library("upload",$config);
		if ($this->upload->do_upload($inputName)) {
			// Files Upload Success
			echo "OK Good";
			$upload_data = $this->upload->data();
      $this->load->model('exemple_model');
      $data = array(
                    'id' => '',
                    'name' => $this->input->post('name'),
                    'detail' => $this->input->post('detail'),
                    'date' => date("Y-m-d"),
                    'type' => $this->input->post('type'),
                    'pic' => $upload_data['file_name']
                );
                $id = $this->exemple_model->insert($data);


		} else {
			// Files Upload Not Success!!
			$errors = $this->upload->display_errors();
			echo $errors;
		}
	}
  //$this->load->view('upload');
}
