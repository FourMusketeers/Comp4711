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
		$this->data['pagebody'] = 'singleView';
		$this->load->model('Roster');
		//$this->data["Player"] = (array)$this->Roster->get($playerID);
		$this->data = array_merge($this->data, (array)$this->Roster->get($playerID));
		//echo var_dump($this->data["Player"]);
		// //$this->data['teams'] = $this->leagues->all();
		// $this->data['teams'] = $this->leagues->paginate(1);

		// $pages = ceil($this->leagues->size() / 12);
		
		// $this->data['pages'] = $this->buildPagination($pages);
		// $this->data['showLeft'] = "disabled";
		// $this->data['showRight'] = $pages == 1 ? "disabled" : "";
		// $this->data['previousPage'] = "";
		// $this->data['nextPage'] = "/League/page/" + 2;
		$this->render();
	}
}
