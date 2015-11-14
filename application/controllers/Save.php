<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends Application {
	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
	}
	public function index($ID = null)
	{
		$config['upload_path']          = './img/players';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 5000;
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;
		$config['overwrite']            = true;
		$config['file_name']            = $this->input->post("image");

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('userfile'))
		{
				$error = array('error' => $this->upload->display_errors());
				//Andrew do some error validation here 
				//IF it gets in here it means it failed
				echo var_dump($error);
				echo "Failure";
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());
				//Succes if it gets in here
				echo "Success";
		}
		$this->load->model('Roster');
		$record = $this->Roster->create();
		if(isset($ID)) {
			$record->PlayerID = $ID;	
		}
		$record->PlayerName = $this->input->post("playerName");
		$record->Pos = $this->input->post("pos");
		$record->Num = $this->input->post("num");
		$record->Image = $this->input->post("image");
		$record->Age = $this->input->post("age");
		$record->Weight = $this->input->post("weight");
		$record->College = $this->input->post("college");
		if($ID == null) {
			$this->Roster->add($record);
			redirect('/Team');	
		} else {
			$this->Roster->update($record);	
			header('Location: ' . $_SERVER["HTTP_REFERER"] );
		}
	}
	public function delete($ID) {
		$this->load->helper('url');
		$this->load->model('Roster');
		$this->Roster->delete($ID);
		redirect('/Team');
	}
}
