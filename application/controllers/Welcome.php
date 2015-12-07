<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	function __construct() {
		parent::__Construct();
		$this->data['pagebody'] = 'welcome_message'; //Load the view
		$this->load->model('Roster'); //Load the model
		$this->load->model('Standings'); //Load the model
		$this->data['roster'] = $this->Roster->all();
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
		$myCode = 'NE';

		$query = $this->db->query("SELECT teamCode, teamName FROM leagues WHERE teamCode NOT LIKE 'NE'");

        foreach($query->result() as $row)
            $options[] = $row;

		$this->data['dropdown'] = $options;

		$this->render();
		
	}

	public function getPrediction($overallAvg, $last5GamesAvg, $last5OppGamesAvg)
	{
		return Round( (.7 * $overallAvg) + (.2 * $last5GamesAvg) + (.1 * $last5OppGamesAvg) );
	}

	public function prediction()
	{
		$team = "";
		$result = "";
		$codeFound = false;

		if(!isset($_POST))
			redirect("/");
		else
        	$team = $_POST['teamdropdown'];

		$query = $this->db->query("SELECT teamCode FROM leagues WHERE teamCode NOT LIKE 'NE'");
        foreach($query->result() as $row)
            $options[] = (array)$row;

        foreach($options as $option)
	    	if(in_array($team, (array)$option))
	    	{	
	    		$codeFound = true;
	    		break;
			}

		// If the team code existsyea
		if($codeFound)
		{
			// Get averages
			$totalAverage = $this->Standings->getTotalAverage('NE');
			$last5Avg = $this->Standings->getAverageOfLastFiveGames('NE');
			$last5OppAvg = $this->Standings->getAverageOfLastFiveGamesWithOpp('NE', $team);
			$oppTotalAverage = $this->Standings->getTotalAverage($team);
			$oppLast5Avg = $this->Standings->getAverageOfLastFiveGames($team);
			$oppLast5OppAvg = $this->Standings->getAverageOfLastFiveGamesWithOpp($team, 'NE');

			$NE = $this->db->query("SELECT TeamName FROM leagues WHERE teamCode LIKE 'NE'")->result();
			$data["yourTeamName"] = array_values((array)(array_values((array)$NE)[0]))[0];
			$data["yourOverallAvg"] = round($totalAverage, 2);
			$data["yourLast5Avg"] = $last5Avg;
			$data["yourLast5OppAvg"] = $last5OppAvg;

			$OPP = $this->db->query("SELECT TeamName FROM leagues WHERE teamCode LIKE ?", $team)->result();
			$data["oppTeamName"] = array_values((array)(array_values((array)$OPP)[0]))[0];
			$data["oppOverallAvg"] = round($oppTotalAverage, 2);
			$data["oppLast5Avg"] = $oppLast5Avg;
			$data["oppLast5OppAvg"] = $oppLast5OppAvg; 

			$data["prediction"] = $this->getPrediction($totalAverage, $last5Avg, $last5OppAvg);

    		$result = $this->parser->parse('_prediction', $data, TRUE);
		} else {
    		$data['teamCode'] = $team;
    		$result = $this->parser->parse('_invalidinput', $data, TRUE);
		}

		echo json_encode($result);
	}
}
