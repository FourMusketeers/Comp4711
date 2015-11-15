<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends Application {
	// Constructor of controller
	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
	}

	// Index of controller
	public function index($ID = null)
	{
		$filepath = "./img/players/";

		if(!file_exists($filepath))
			mkdir($filepath, 0777, true);

		$config['upload_path']          = $filepath;
		$config['upload_url']			= $filepath;
		$config['allowed_types']        = "gif|jpg|png";
		$config['max_size']             = "5000KB";
		$config['max_width']            = "5000";
		$config['max_height']           = "5000";
		$config['overwrite']            = TRUE;
		$config['file_name']            = $this->input->post("image");

		// Get image from computer
		$this->load->library('upload');
		$this->upload->initialize($config);

		$this->session->set_flashdata('validationmsg', 
			$this->session->flashdata('validationmsg') . $this->input->post("userfile"));

		if(!empty($_FILES['userfile']['name']))
			if ( !$this->upload->do_upload('userfile') )
			{
				// Failure in here.
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('validationmsg', 
					$this->session->flashdata('validationmsg') . $this->upload->display_errors());
				//echo var_dump($error);
				echo "Image upload failure";
			}
			else
			{
				// Success if it gets in here
				$data = array('upload_data' => $this->upload->data());
				echo "Image upload success";
			}

		// Form validation rules
		$rules = array(
				array(
					'field' => 'playerName',
					'label' => 'Player Name',
					'rules' => 'required'
					),
				array(
					'field' => 'pos',
					'label' => 'Position',
					'rules' => 'required|callback_valid_pos'
					),
				array(
					'field' => 'image',
					'label' => 'Profile Picture',
					'rules' => ''
					),
				array(
					'field' => 'age',
					'label' => 'Age',
					'rules' => 'required'
					),
				array(
					'field' => 'weight',
					'label' => 'Weight',
					'rules' => 'required'
					),
				array(
					'field' => 'college',
					'label' => 'College',
					'rules' => 'required'
					)
		);

		$this->load->model('Roster');
		// Create a new player
		$record = $this->Roster->create();
		if(isset($ID)) {
			// If player is being updated, use same primary key
			$record->PlayerID = $ID;	
		}

		// Setting values to new player from form
		$record->PlayerName = $this->input->post("playerName");
		$record->Pos = $this->input->post("pos");
		$record->Num = $this->input->post("num");
		$record->Image = $this->input->post("image");
		$record->Age = $this->input->post("age");
		$record->Weight = $this->input->post("weight");
		$record->College = $this->input->post("college");

		// Apply rules
		$this->form_validation->set_rules($rules);

		// Add leading 0 to jersey number for functional ordering
		if((int)$record->Num < 10 && $record->Num[0] != '0')
			$record->Num = '0'.$record->Num;

		// Apply a rule to jersey number based on if adding a new player or updating an old one
		if($ID == null) {
			$this->form_validation->set_rules('num', 'Jersey Number', 'required|is_unique[players.Num]');
		} else {
			// If updating a current player, compare number in textbox to original jersey number
			// If it is the same, don't add unique validation, otherwise add unique validation
			$query = $this->Roster->get($ID);
			$originalID = $query->Num;
			if((int)$record->Num == (int)$originalID)
				$this->form_validation->set_rules('num', 'Jersey Number', 'required');
			else
				$this->form_validation->set_rules('num', 'Jersey Number', 'required|is_unique[players.Num]');

		}	

		// If form is valid
		if($this->form_validation->run() == TRUE)
		{
			// Check if adding a new player or just updating an old one
			if($ID == null) {
				$this->Roster->add($record);
				redirect('/Team/Page');	
			} else {
				$this->Roster->update($record);	
				header('Location: ' . $_SERVER["HTTP_REFERER"] );
			}
		}  else {
			// If form is not valid we send the validation errors
  			$this->session->set_flashdata('validationmsg', $this->session->flashdata('validationmsg') . validation_errors());
			if($ID == null)
				redirect('/SinglePlayer/createNew/');
			else
				redirect('/SinglePlayer/index/' . $ID);
		}
	}

	// Delete the player
	public function delete($ID) {
		$this->load->helper('url');
		$this->load->model('Roster');
		$this->Roster->delete($ID);
		redirect('/Team');
	}

	// Custom validation to check if position is real
	public function valid_pos($str)
	{
		$validpositions = array(
								"QB", "RB", "WR", 
								"TE", "OL", "DL", 
								"LB", "DB", "K", 
								"P", "C", "OLB", 
								"DT", "CB", "OT",
								"FB", "LS", "SS",
								);
		if (!in_array($str, $validpositions))
		{
			$this->form_validation->set_message('valid_pos', $str . ' is not a valid position.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}
