<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class League extends Application {

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
	public function index()
	{
		$this->data['pagebody'] = 'league';
		$this->load->model('leagues');
		//$this->data['teams'] = $this->leagues->all();
		$this->data['teams'] = $this->leagues->paginate(1);

		$pages = ceil($this->leagues->size() / 12);
		
		$this->data['pages'] = $this->buildPagination($pages);
		$this->data['showLeft'] = "disabled";
		$this->data['showRight'] = $pages == 1 ? "disabled" : "";
		$this->data['previousPage'] = "";
		$this->data['nextPage'] = "/League/page/" + 2;
		$this->render();
	}

	public function page($page) {
		$this->data['pagebody'] = 'league';
		$this->load->library('parser');
		$this->load->model('leagues');
		$this->data['teams'] = $this->leagues->paginate($page);
		$pages = ceil($this->leagues->size() / 12);
		$this->data['pages'] = $this->buildPagination($pages);
		$this->data['showLeft'] = $page ==1 ? "disabled" : "";
		$this->data['showRight'] = $page >= $pages ? "disabled" : "";
		$this->data["previousPage"] = $page ==1 ? "" : "/League/page/"+$page - 1;
		$this->data['nextPage'] = $page >= $pages ? "" : "/League/page/"+$page+1;
		
		
		
		
		/* TESTING */
		// $newdata = array(
			// 'togglegallery' => false,
			// 'rosterorder' => false,
			// 'editing' => false,
		// );
		
		$this->session->set_userdata('togglegallery', false);
		if (isset($_SESSION['togglegallery'])) {
			echo ("HELLLOOO");
		} else {
			
			echo ("FAIILED");
		}
		
		/* END OF SESSION TEST */
		
		
		$this->render();
	}
	private function buildPagination($pages) {
		$result = array();
		for($i = 0; $i < $pages; $i++) {
			$temp = array(
				"pageNum" => $i + 1
			);
			array_push($result, $temp);
		}
		return $result;
	}
}
