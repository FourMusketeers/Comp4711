<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends Application {

	function __construct()
    {
        parent::__construct();
    }
	public function layout($page) {
		$this->session->set_userdata('teamMode', $page);
	}
	public function pagelayout($mode = null) {
		if($mode == 'gallery') {
			$this->layout('teamGallery');
		} else if($mode == 'team'){
			$this->layout('Team');
		}
		$this->data['pagebody'] = $_SESSION['teamMode'];
		
		$this->load->model('roster');
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
	public function page($page = 1)
	{	
		if(!isset($_SESSION['teamMode'])) {
			$this->layout('Team');
		}
		
		$this->data['pagebody'] = $_SESSION['teamMode'];
		
		$this->load->model('roster');
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
		$this->data["previousPage"] = $page ==1 ? "" : "/team/page/"+$page - 1;
		$this->data['nextPage'] = $page >= $pages ? "" : "/team/page/"+$page+1;
		
		$this->data['goFirst'] = $page ==1 ? "disabled" : "";
		$this->data['goLast'] = $page >= $pages ? "disabled" : "";
		$this->data['firstPage'] = $page ==1 ? "" : "/team/page/"+1;
		$this->data['lastPage'] = $page >= $pages ? "" : "/team/page/"+$pages;
	}
}
