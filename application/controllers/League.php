<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class League extends Application {

	function __construct()
    {
        parent::__construct();
    }
	
	public function conference($orderdiv = null) {
		$this->session->set_userdata('leagueMode', 'leagueConference');
		
		if($orderdiv != 'AFC') {
			$this->data['AFCteam'] = $this->leagues->getConference('American');
		}
		if($orderdiv != 'NFC') {
			$this->data['NFCteam'] = $this->leagues->getConference('National');	
		}
	}
	
	public function division($orderdiv = null) {
		$this->session->set_userdata('leagueMode', 'leagueDivision');
		
		if($orderdiv != 'AFCE') {
			$this->data['AFCEast'] = $this->leagues->getDivision('AFC East Team');
		}
		if($orderdiv != 'AFCN') {
			$this->data['AFCNorth'] = $this->leagues->getDivision('AFC North Team');
		}
		if($orderdiv != 'AFCS') {
			$this->data['AFCSouth'] = $this->leagues->getDivision('AFC South Team');
		}
		if($orderdiv != 'AFCW') {
			$this->data['AFCWest'] = $this->leagues->getDivision('AFC West Team');
		}
		if($orderdiv != 'NFCE') {
			$this->data['NFCEast'] = $this->leagues->getDivision('NFC East Team');
		}
		if($orderdiv != 'NFCN') {
			$this->data['NFCNorth'] = $this->leagues->getDivision('NFC North Team');
		}
		if($orderdiv != 'NFCS') {
			$this->data['NFCSouth'] = $this->leagues->getDivision('NFC South Team');
		}
		if($orderdiv != 'NFCW') {
			$this->data['NFCWest'] = $this->leagues->getDivision('NFC West Team');	
		}
	}
	
	public function league() {
		$this->session->set_userdata('leagueMode', 'league');
		$this->data['teams'] = $this->leagues->paginate(1);
		$pages = ceil($this->leagues->size() / 12);
		$this->setPagination($pages, 1);
	}
	
	public function layout($mode) {
		$this->load->library('parser');
		$this->load->model('leagues');
			
		$this->orderTable();	
			
		if ($mode == "leagueConference") {
			$this->conference();
		} else if ($mode == "leagueDivision") {
			$this->division();
		} else if ($mode == "league") {
			$this->league();
		}
	
		$this->data['pagebody'] = $mode;
		
		$this->render();
	}
	
	public function order($orderCol = null, $orderdir = null, $orderdiv = null) {
		$this->data['pagebody'] = $_SESSION['leagueMode'];
		
		$this->load->model('leagues');
		
		if (!isset($_SESSION['leagueOrderDir'])) {
			$this->session->set_userdata('leagueOrderDir', 'ASC');
		}
		
		if ($orderdir == 'ASC') {
			$this->data['leagueorderdir'] = 'DESC';
			$this->session->set_userdata('leagueOrderDir', 'DESC');
		} else if ($orderdir == 'DESC') {
			$this->data['leagueorderdir'] = 'ASC';
			$this->session->set_userdata('leagueOrderDir', 'ASC');
		}
		
		if ($orderCol == 'TeamName') {
			$this->session->set_userdata('leagueOrderBy', 'TeamName');
		} else if ($orderCol == 'Win') {
			$this->session->set_userdata('leagueOrderBy', 'Win');
		} else if ($orderCol == 'Loss') {
			$this->session->set_userdata('leagueOrderBy', 'Loss');
		} else if ($orderCol == 'Tie') {
			$this->session->set_userdata('leagueOrderBy', 'Tie');
		} else if ($orderCol == 'Conf') {
			$this->session->set_userdata('leagueOrderBy', 'Conf');
		} else if ($orderCol == 'Division') {
			$this->session->set_userdata('leagueOrderBy', 'Division');
		}
		
		// If ordering has been specified
		if(isset($_SESSION['leagueOrderBy']))
		{
			$this->leagues->order_by($_SESSION['leagueOrderBy'], $_SESSION['leagueOrderDir']);
		}
		
		if($_SESSION['leagueMode'] == 'leagueConference') {
			if($orderdiv == 'AFC') {
				$this->data['AFCteam'] = $this->leagues->getConference('American');
			} else if ($orderdiv == 'NFC') {
				$this->data['NFCteam'] = $this->leagues->getConference('National');	
			}
			$this->conference($orderdiv);
		} else if($_SESSION['leagueMode'] == 'leagueDivision') {
			if($orderdiv == 'AFCE') {
				$this->data['AFCEast'] = $this->leagues->getDivision('AFC East Team');
			} else if ($orderdiv == 'AFCN') {
				$this->data['AFCNorth'] = $this->leagues->getDivision('AFC North Team');
			} else if ($orderdiv == 'AFCS') {
				$this->data['AFCSouth'] = $this->leagues->getDivision('AFC South Team');
			} else if ($orderdiv == 'AFCW') {
				$this->data['AFCWest'] = $this->leagues->getDivision('AFC West Team');
			} else if ($orderdiv == 'NFCE') {
				$this->data['NFCEast'] = $this->leagues->getDivision('NFC East Team');
			} else if ($orderdiv == 'NFCN') {
				$this->data['NFCNorth'] = $this->leagues->getDivision('NFC North Team');
			} else if ($orderdiv == 'NFCS') {
				$this->data['NFCSouth'] = $this->leagues->getDivision('NFC South Team');
			} else if ($orderdiv == 'NFCW') {
				$this->data['NFCWest'] = $this->leagues->getDivision('NFC West Team');
			}
			$this->division($orderdiv);
		} else {
			$this->data['teams'] = $this->leagues->paginate(1);
			$pages = ceil($this->leagues->size() / 12);
			$this->setPagination($pages, 1);
		}
		
		$this->render();
	}
	
	public function orderTable() {
		if (!isset($_SESSION['leagueOrderDir'])) {
			$this->data['leagueorderdir'] = 'ASC';
		} else if ($_SESSION['leagueOrderDir'] == 'ASC') {
			$this->data['leagueorderdir'] = 'ASC';
		} else if ($_SESSION['leagueOrderDir'] == 'DESC') {
			$this->data['leagueorderdir'] = 'DESC';
		}
		
		if(isset($_SESSION['leagueOrderBy']) && isset($_SESSION['leagueOrderDir'])) {
			$this->leagues->order_by($_SESSION['leagueOrderBy'], $_SESSION['leagueOrderDir']);
		}
	}

	public function page($page = 1) {
		if(!isset($_SESSION['leagueMode'])) {
			$this->session->set_userdata('leagueMode', 'league');
		}
		
		$this->load->library('parser');
		$this->load->model('leagues');
		
		$this->data['pagebody'] = $_SESSION['leagueMode'];
		
		$this->orderTable();
		
		if($_SESSION['leagueMode'] == 'leagueConference') {
			$this->conference();
		} else if($_SESSION['leagueMode'] == 'leagueDivision') {
			$this->division();
		} else {
			$this->data['teams'] = $this->leagues->paginate($page);
			$pages = ceil($this->leagues->size() / 12);
			$this->setPagination($pages, $page);
		}
		
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
	
	private function setPagination($pages, $page) {
		$this->data['pages'] = $this->buildPagination($pages);
		$this->data['showLeft'] = $page ==1 ? "disabled" : "";
		$this->data['showRight'] = $page >= $pages ? "disabled" : "";
		$this->data["previousPage"] = $page ==1 ? "" : "/league/page/"+$page - 1;
		$this->data['nextPage'] = $page >= $pages ? "" : "/league/page/"+$page + 1;
		$this->data['goFirst'] = $page ==1 ? "disabled" : "";
		$this->data['goLast'] = $page >= $pages ? "disabled" : "";
		$this->data['firstPage'] = $page ==1 ? "" : "/league/page/"+1;
		$this->data['lastPage'] = $page >= $pages ? "" : "/league/page/"+$pages;	
		$this->data['pageNum'] = $page;		
	}
}
