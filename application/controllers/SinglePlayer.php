<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SinglePlayer extends Application {

	function __construct()
    {
        parent::__construct();
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($playerID)
	{
		// If no mode in session, set default to singleView
		if(!isset($_SESSION['editMode'])) {
			$this->session->set_userdata('editMode', "singleView");
		}

		// Set view to session value 
		$this->data['pagebody'] = $_SESSION['editMode'];
		$this->load->model('Roster');
		$this->data = array_merge($this->data, (array)$this->Roster->get($playerID));
		// Set validation messages if any, if session is in edit mode
		if($_SESSION['editMode'] == 'singleViewEdit')
		{
			if($this->session->flashdata('validationmsg') != NULL)
			{
				$this->data['errors'] = $this->session->flashdata('validationmsg') . '<br/>';
			}
			else
				$this->data['errors'] = '';
		}

		$this->render();
	}
	public function createNew()
	{
		$this->data['pagebody'] = 'singleViewEdit';
		$this->load->model('Roster');
		$data = $this->Roster->create();
		$data->Image = rand(10,100) . ".png";
		$this->data = array_merge($this->data, (array)$data);
		if($this->session->flashdata('validationmsg') != NULL)
			$this->data['errors'] = $this->session->flashdata('validationmsg') . '<br/>';
		else
			$this->data['errors'] = '';

		$this->render();
	}
}
