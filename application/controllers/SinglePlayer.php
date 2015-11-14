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
		if(!isset($_SESSION['editMode'])) {
			$this->session->set_userdata('editMode', "singleView");
		}
		$this->data['pagebody'] = $_SESSION['editMode'];
		$this->load->model('Roster');
		$this->data = array_merge($this->data, (array)$this->Roster->get($playerID));

		$this->render();
	}
	public function createNew()
	{
		$this->data['pagebody'] = 'singleViewEdit';
		$this->load->model('Roster');
		$data = $this->Roster->create();
		$data->Image = rand(10,100) . ".png";
		$this->data = array_merge($this->data, (array)$data);
		$this->render();
	}
}
