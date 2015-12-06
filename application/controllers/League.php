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
			$this->session->set_userdata('leagueOrderDirafce', 'ASC');
			$this->session->set_userdata('leagueOrderDirafcn', 'ASC');
			$this->session->set_userdata('leagueOrderDirafcs', 'ASC');
			$this->session->set_userdata('leagueOrderDirafcw', 'ASC');
			$this->session->set_userdata('leagueOrderDirnfce', 'ASC');
			$this->session->set_userdata('leagueOrderDirnfcn', 'ASC');
			$this->session->set_userdata('leagueOrderDirnfcs', 'ASC');
			$this->session->set_userdata('leagueOrderDirnfcw', 'ASC');
			$this->session->set_userdata('leagueOrderDirafc', 'ASC');
			$this->session->set_userdata('leagueOrderDirnfc', 'ASC');
		}
		
		if ($orderdir == 'ASC') {
			if($orderdiv == 'AFCE') {
				$this->data['leagueorderdirafce'] = 'DESC';
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->session->set_userdata('leagueOrderDirafce', 'DESC');
			} else if ($orderdiv == 'AFCN') {
				$this->data['leagueorderdirafcn'] = 'DESC';
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->session->set_userdata('leagueOrderDirafcn', 'DESC');
			} else if ($orderdiv == 'AFCS') {
				$this->data['leagueorderdirafcs'] = 'DESC';
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->session->set_userdata('leagueOrderDirafcs', 'DESC');
			} else if ($orderdiv == 'AFCW') {
				$this->data['leagueorderdirafce'] = 'DESC';
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->session->set_userdata('leagueOrderDirafcw', 'DESC');
			} else if ($orderdiv == 'NFCE') {
				$this->data['leagueorderdirnfce'] = 'DESC';
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->session->set_userdata('leagueOrderDirnfce', 'DESC');
			} else if ($orderdiv == 'NFCN') {
				$this->data['leagueorderdirnfcn'] = 'DESC';
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->session->set_userdata('leagueOrderDirnfcn', 'DESC');
			} else if ($orderdiv == 'NFCS') {
				$this->data['leagueorderdirnfcs'] = 'DESC';
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->session->set_userdata('leagueOrderDirnfcs', 'DESC');
			} else if ($orderdiv == 'NFCW') {
				$this->data['leagueorderdirnfcw'] = 'DESC';
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->session->set_userdata('leagueOrderDirnfcw', 'DESC');
			} else if ($orderdiv == 'AFC') {
				$this->data['leagueorderdirafc'] = 'DESC';
				$this->data['leagueorderdirnfc'] = $_SESSION['leagueOrderDirnfc'];
				$this->session->set_userdata('leagueOrderDirafc', 'DESC');
			} else if ($orderdiv == 'NFC') {
				$this->data['leagueorderdirnfc'] = 'DESC';
				$this->data['leagueorderdirafc'] = $_SESSION['leagueOrderDirafc'];
				$this->session->set_userdata('leagueOrderDirnfc', 'DESC');
			} else {
				$this->data['leagueorderdir'] = 'DESC';
			}
			
			$this->session->set_userdata('leagueOrderDir', 'DESC');
		} else if ($orderdir == 'DESC') {
			if($orderdiv == 'AFCE') {
				$this->data['leagueorderdirafce'] = 'ASC';
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->session->set_userdata('leagueOrderDirafce', 'ASC');
			} else if ($orderdiv == 'AFCN') {
				$this->data['leagueorderdirafcn'] = 'ASC';
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->session->set_userdata('leagueOrderDirafcn', 'ASC');
			} else if ($orderdiv == 'AFCS') {
				$this->data['leagueorderdirafcs'] = 'ASC';
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->session->set_userdata('leagueOrderDirafcs', 'ASC');
			} else if ($orderdiv == 'AFCW') {
				$this->data['leagueorderdirafce'] = 'ASC';
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->session->set_userdata('leagueOrderDirafcw', 'ASC');
			} else if ($orderdiv == 'NFCE') {
				$this->data['leagueorderdirnfce'] = 'ASC';
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->session->set_userdata('leagueOrderDirnfce', 'ASC');
			} else if ($orderdiv == 'NFCN') {
				$this->data['leagueorderdirnfcn'] = 'ASC';
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->session->set_userdata('leagueOrderDirnfcn', 'ASC');
			} else if ($orderdiv == 'NFCS') {
				$this->data['leagueorderdirnfcs'] = 'ASC';
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirnfcw'] = $_SESSION['leagueOrderDirnfcw'];
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->session->set_userdata('leagueOrderDirnfcs', 'ASC');
			} else if ($orderdiv == 'NFCW') {
				$this->data['leagueorderdirnfcw'] = 'ASC';
				$this->data['leagueorderdirnfcn'] = $_SESSION['leagueOrderDirnfcn'];
				$this->data['leagueorderdirnfcs'] = $_SESSION['leagueOrderDirnfcs'];
				$this->data['leagueorderdirnfce'] = $_SESSION['leagueOrderDirnfce'];
				$this->data['leagueorderdirafce'] = $_SESSION['leagueOrderDirafce'];
				$this->data['leagueorderdirafcn'] = $_SESSION['leagueOrderDirafcn'];
				$this->data['leagueorderdirafcs'] = $_SESSION['leagueOrderDirafcs'];
				$this->data['leagueorderdirafcw'] = $_SESSION['leagueOrderDirafcw'];
				$this->session->set_userdata('leagueOrderDirnfcw', 'ASC');
			} else if ($orderdiv == 'AFC') {
				$this->data['leagueorderdirafc'] = 'ASC';
				$this->data['leagueorderdirnfc'] = $_SESSION['leagueOrderDirnfc'];
				$this->session->set_userdata('leagueOrderDirafc', 'ASC');
			} else if ($orderdiv == 'NFC') {
				$this->data['leagueorderdirnfc'] = 'ASC';
				$this->data['leagueorderdirafc'] = $_SESSION['leagueOrderDirafc'];
				$this->session->set_userdata('leagueOrderDirnfc', 'ASC');
			} else {
				$this->data['leagueorderdir'] = 'ASC';
			}
			
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
		} else if ($orderCol == 'PF') {
			$this->session->set_userdata('leagueOrderBy', 'PF');
		} else if ($orderCol == 'PA') {
			$this->session->set_userdata('leagueOrderBy', 'PA');
		} else if ($orderCol == 'NetPts') {
			$this->session->set_userdata('leagueOrderBy', 'NetPts');
		} else if ($orderCol == 'Home') {
			$this->session->set_userdata('leagueOrderBy', 'Home');
		} else if ($orderCol == 'Road') {
			$this->session->set_userdata('leagueOrderBy', 'Road');
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
			$this->data['leagueorderdirafce'] = 'ASC';
			$this->data['leagueorderdirafcn'] = 'ASC';
			$this->data['leagueorderdirafcs'] = 'ASC';
			$this->data['leagueorderdirafcw'] = 'ASC';
			$this->data['leagueorderdirnfce'] = 'ASC';
			$this->data['leagueorderdirnfcn'] = 'ASC';
			$this->data['leagueorderdirnfcs'] = 'ASC';
			$this->data['leagueorderdirnfcw'] = 'ASC';
			$this->data['leagueorderdirafc'] = 'ASC';
			$this->data['leagueorderdirnfc'] = 'ASC';
		} else if ($_SESSION['leagueOrderDir'] == 'ASC') {
			$this->data['leagueorderdir'] = 'ASC';
			$this->data['leagueorderdirafce'] = 'ASC';
			$this->data['leagueorderdirafcn'] = 'ASC';
			$this->data['leagueorderdirafcs'] = 'ASC';
			$this->data['leagueorderdirafcw'] = 'ASC';
			$this->data['leagueorderdirnfce'] = 'ASC';
			$this->data['leagueorderdirnfcn'] = 'ASC';
			$this->data['leagueorderdirnfcs'] = 'ASC';
			$this->data['leagueorderdirnfcw'] = 'ASC';
			$this->data['leagueorderdirafc'] = 'ASC';
			$this->data['leagueorderdirnfc'] = 'ASC';
		} else if ($_SESSION['leagueOrderDir'] == 'DESC') {
			$this->data['leagueorderdir'] = 'DESC';
			$this->data['leagueorderdirafce'] = 'DESC';
			$this->data['leagueorderdirafcn'] = 'DESC';
			$this->data['leagueorderdirafcs'] = 'DESC';
			$this->data['leagueorderdirafcw'] = 'DESC';
			$this->data['leagueorderdirnfce'] = 'DESC';
			$this->data['leagueorderdirnfcn'] = 'DESC';
			$this->data['leagueorderdirnfcs'] = 'DESC';
			$this->data['leagueorderdirnfcw'] = 'DESC';
			$this->data['leagueorderdirafc'] = 'DESC';
			$this->data['leagueorderdirnfc'] = 'DESC';
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
