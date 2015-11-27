<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class League extends Application {

	function __construct()
    {
        parent::__construct();
    }
	
	public function layout($mode) {
		$this->data['pagebody'] = $mode;
		$this->load->library('parser');
		$this->load->model('leagues');
			
		if ($mode = "leagueConference") {
			$this->data['AFCteam'] = $this->leagues->getConference('American');
			$this->data['NFCteam'] = $this->leagues->getConference('National');
		}
		
		if ($mode = "leagueDivision") {
			$this->data['AFCEast'] = $this->leagues->getDivision('AFC East Team');
			$this->data['AFCNorth'] = $this->leagues->getDivision('AFC North Team');
			$this->data['AFCSouth'] = $this->leagues->getDivision('AFC South Team');
			$this->data['AFCWest'] = $this->leagues->getDivision('AFC West Team');
			
			$this->data['NFCEast'] = $this->leagues->getDivision('NFC East Team');
			$this->data['NFCNorth'] = $this->leagues->getDivision('NFC North Team');
			$this->data['NFCSouth'] = $this->leagues->getDivision('NFC South Team');
			$this->data['NFCWest'] = $this->leagues->getDivision('NFC West Team');
		}

		
		
		$this->render();
	}

	public function page($page = 1) {
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
		$this->data['goFirst'] = $page ==1 ? "disabled" : "";
		$this->data['goLast'] = $page >= $pages ? "disabled" : "";
		$this->data['firstPage'] = $page ==1 ? "" : "/team/page/"+1;
		$this->data['lastPage'] = $page >= $pages ? "" : "/team/page/"+$pages;		
		
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
