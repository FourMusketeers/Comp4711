<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends Application {

	function __construct()
    {
        parent::__construct();
    }
	public function layout($mode = null) {
		if($mode == 'gallery') {
			$this->session->set_userdata('teamMode', 'teamGallery');
		} else if($mode == 'team'){
			$this->session->set_userdata('teamMode', 'Team');
		}
		$this->data['pagebody'] = $_SESSION['teamMode'];
		
		$this->load->model('roster');
		
		if(isset($_SESSION['orderBy']) && isset($_SESSION['orderDir'])) {
			$this->roster->order_by($_SESSION['orderBy'], $_SESSION['orderDir']);
		}
		if ($_SESSION['orderDir'] == 'ASC') {
			$this->data['orderdir'] = 'ASC';
		} else if ($_SESSION['orderDir'] == 'DESC') {
			$this->data['orderdir'] = 'DESC';
		}
		
		$this->data["roster"] = $this->roster->paginate(1);
		$pages = ceil($this->roster->size() / 12);
		$this->data['pages'] = $this->buildPagination($pages);
		$this->data['showLeft'] = "disabled";
		$this->data['showRight'] = $pages == 1 ? "disabled" : "";
		$this->data['previousPage'] = "";
		$this->data['nextPage'] = "/team/page/" + 2;
		$this->data['firstPage'] = "";
		$this->data['lastPage'] = "/team/page/" + $pages;
		$this->data['goFirst'] = "disabled";
		$this->data['goLast'] = $pages == 1 ? "disabled" : "";
		$this->data['pageNum'] = 1;
		$this->buildMenu();
		$this->render();
	}
	public function order($page = 1, $orderCol = null, $orderdir = null) {
		$this->data['pagebody'] = $_SESSION['teamMode'];
		
		$this->load->model('roster');
		
		if (!isset($_SESSION['orderDir'])) {
			$this->session->set_userdata('orderDir', 'ASC');
		}
		
		if ($orderdir == 'ASC') {
			$this->data['orderdir'] = 'DESC';
			$this->session->set_userdata('orderDir', 'DESC');
		} else if ($orderdir == 'DESC') {
			$this->data['orderdir'] = 'ASC';
			$this->session->set_userdata('orderDir', 'ASC');
		}
		
		if ($orderCol == 'PlayerName') {
			$this->session->set_userdata('orderBy', 'PlayerName');
		} else if ($orderCol == 'Num') {
			$this->session->set_userdata('orderBy', 'Num');
		} else if ($orderCol == 'Pos') {
			$this->session->set_userdata('orderBy', 'Pos');
		}
		
		// If ordering has been specified
		if(isset($_SESSION['orderBy']))
		{
			$this->roster->order_by($_SESSION['orderBy'], $_SESSION['orderDir']);
		}
		
		$this->data["roster"] = $this->roster->paginate($page);
		$pages = ceil($this->roster->size() / 12);
		$this->setPagination($pages, $page);
		$this->buildMenu();
		
		$this->render();
	}
	public function page($page = 1)
	{	
		if(!isset($_SESSION['teamMode'])) {
			$this->session->set_userdata('teamMode', 'Team');
		}
		
		$this->data['pagebody'] = $_SESSION['teamMode'];
		
		$this->load->model('roster');
		
		if (!isset($_SESSION['orderDir'])) {
			$this->data['orderdir'] = 'ASC';
		} else if ($_SESSION['orderDir'] == 'ASC') {
			$this->data['orderdir'] = 'ASC';
		} else if ($_SESSION['orderDir'] == 'DESC') {
			$this->data['orderdir'] = 'DESC';
		}
		
		if(isset($_SESSION['orderBy']) && isset($_SESSION['orderDir'])) {
			$this->roster->order_by($_SESSION['orderBy'], $_SESSION['orderDir']);
		}

		$this->data["roster"] = $this->roster->paginate($page);
		$pages = ceil($this->roster->size() / 12);
		$this->setPagination($pages, $page);
		$this->buildMenu();
		
		$this->render();
	}

	private function buildMenu() {
		if(isset($_SESSION['editMode']) && $_SESSION['editMode'] == "singleViewEdit") {
			$this->data["options"] = $this->load->view('addPlayer', "", true);
		} else {
			$this->data["options"] = "";
		}
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
	private function setPagination($pages, $page) {
		$this->data['pages'] = $this->buildPagination($pages);
		$this->data['showLeft'] = $page ==1 ? "disabled" : "";
		$this->data['showRight'] = $page >= $pages ? "disabled" : "";
		$this->data["previousPage"] = $page ==1 ? "" : $page - 1;
		$this->data['nextPage'] = $page >= $pages ? "" : $page+1;
		
		$this->data['goFirst'] = $page ==1 ? "disabled" : "";
		$this->data['goLast'] = $page >= $pages ? "disabled" : "";
		$this->data['firstPage'] = $page ==1 ? "" : 1;
		$this->data['lastPage'] = $page >= $pages ? "" : $pages;

		$this->data['pageNum'] = $page;
	}
}
