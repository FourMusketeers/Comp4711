<?php

/**
 * 
 * @author Leon
 *
 */
define("STANDINGS_TABLE", "leagues");
class Standings extends MY_Model {
	// Constructor
	public function __construct(){
		parent::__construct('Score', 'scoreID'); 
		//$this->xml = simplexml_load_file('mock_data/standings.xml');
		$this->load->library('xmlrpc');
		//$config['debug'] = true;
		//$this->xmlrpc->initialize($config);
		$this->xmlrpc->server("nfl.jlparry.com/rpc", 80);
		$this->xmlrpc->method('since');
		$request = array('19321203');
		$this->xmlrpc->request($request);
	 	if ( ! $this->xmlrpc->send_request()) {
			echo $this->xmlrpc->display_error();
		} else {	
			//echo '<pre>';
			//print_r($this->xmlrpc->display_response());
			//echo '</pre>';
			$this->xmlResult = $this->xmlrpc->display_response();
		}
	}

	// Get total average out of all games for given team.
	public function getTotalAverage($teamCode)
	{
		$array = 0;
		$query = $this->db->query("SELECT homeScore as score FROM score WHERE homeTeam LIKE ?", $teamCode);
        foreach($query->result() as $row)
            $options[] = (array)$row;

		$query = $this->db->query("SELECT awayScore as score FROM score WHERE awayTeam LIKE ?", $teamCode);
        foreach($query->result() as $row)
            $options[] = (array)$row;

        foreach($options as $option)
        	$array += (int)(array_values((array)$option)[0]);


        $average = $array/count($options);
		return $average;
	}

	// Compare date function.
	private static function cmp(array $a, array $b)
	{
		if($a['date'] < $b['date'])
			return 1;
		else if($a['date'] > $b['date'])
			return -1;
		else 
			return 0;
	}

	// Get the average score of the last five games.
	public function getAverageOfLastFiveGames($teamCode)
	{
		$array = 0;
		$average = 0;
		$options = null;
		$query = $this->db->query("SELECT date, homeScore as score FROM score WHERE homeTeam LIKE ?", $teamCode);
        foreach($query->result() as $row)
            $options[] = (array)$row;

		$query = $this->db->query("SELECT date, awayScore as score FROM score WHERE awayTeam LIKE ?", $teamCode);
        foreach($query->result() as $row)
            $options[] = (array)$row;

		if($options != null)
		{
	        usort($options, array("Standings", "cmp"));
			$num = (count($options) >= 5 ? 5 : count($options));
			$i = $num;
			
			foreach($options as $option)
	        {
	        	if($i == 0)
	        		break;
	        	$array += (int)(array_values((array)$option)[1]);
	        	$i--;
       		}

       		$average = $array/$num;
       	}
		return $average;
	}

	// Get the average of the last 5 games against a opponent.
	public function getAverageOfLastFiveGamesWithOpp($teamCode, $oppCode)
	{
		$array = 0;
		$average = 0;
		$options = null;
		$query = $this->db->query("SELECT date, homeScore as score FROM score WHERE homeTeam LIKE ? AND awayTeam LIKE ?", array($teamCode, $oppCode) );
        foreach($query->result() as $row)
            $options[] = (array)$row;

		$query = $this->db->query("SELECT date, awayScore as score FROM score WHERE homeTeam LIKE ? AND awayTeam LIKE ?", array($oppCode, $teamCode) );
        foreach($query->result() as $row)
            $options[] = (array)$row;

		if($options != null)
		{
	        usort($options, array("Standings", "cmp"));
			$num = (count($options) >= 5 ? 5 : count($options));
			$i = $num;
			
			foreach($options as $option)
	        {
	        	if($i == 0)
	        		break;
	        	$array += (int)(array_values((array)$option)[1]);
	        	$i--;
	       	}

	       	$average = $array/$num;
        }	
		return $average;
	}
	 
	public function updateDatabase() {
		//Update the scores table
		$scores = array();
		foreach($this->xmlResult as $score) {
			$score = $this->objectMapping($score);
			array_push($scores, $score);
		}
		foreach($scores as $score) {
			if(parent::exists($score->scoreID)) {
				parent::update($score);
			} else {
				parent::add($score);
			}
		}
		$standings = $this->buildTeamStandings($scores);
		// foreach($standings as $teamName => $standing) {
		// 	echo $teamName;
		// 	echo '<pre>';
		// 	echo var_dump($standing);
		// 	echo '</pre>';
		// }
		foreach($standings as $standing) {
			if (is_object($standing)) {
            $data = get_object_vars($standing);
	        } else {
	            $data = $standing;
	        }
	        $this->db->where("teamCode", $data["teamCode"]);
	        $this->db->update(STANDINGS_TABLE, $data);	
		}
		

	}
	private function objectMapping($score) {
		$record = new stdClass();
		$scoreArray = explode(":", $score["score"]);
		$record->scoreID = $score["number"];
		$record->homeTeam = $score["home"];
		$record->awayTeam = $score["away"];
		$record->date =  (new DateTime($score["date"]))->format('Y-m-d H:i:s');
		$record->homeScore = $scoreArray[0];
		$record->awayScore = $scoreArray[1];
		return $record;
	}
	private function buildTeamStandings($scores) {
		$standings = array();
		foreach($scores as $score) {
			$winner = $score->homeScore < $score->awayScore ? $score->homeTeam : $score->awayTeam;
			$loser  = $score->homeScore > $score->awayScore ? $score->homeTeam : $score->awayTeam;
			if(!isset($standings[$score->homeTeam])) {
				$standings[$score->homeTeam] = array(
						"teamCode" => $score->homeTeam,
						"win" => 0,
						"loss" => 0,
						"tie" => 0,
						"PF" => 0,
						"PA" => 0,
						"HomeWins" => 0,
						"HomeLosses" =>0,
						"AwayWins" => 0,
						"AwayLosses" => 0
					);
			}
			if(!isset($standings[$score->awayTeam])) {
				$standings[$score->awayTeam] = array(
						"teamCode" => $score->awayTeam,
						"win" => 0,
						"loss" => 0,
						"tie" => 0,
						"PF" => 0,
						"PA" => 0,
						"HomeWins" => 0,
						"HomeLosses" =>0,
						"AwayWins" => 0,
						"AwayLosses" => 0
					);
			}
			if($score->awayScore == $score->awayTeam) {
				$standings[$score->teamTeam]['tie']++;
				$standings[$score->homeTeam]['tie']++;
			} else {
				$standings[$winner]["win"]++;
				$standings[$loser]["loss"]++;
			}
			$standings[$score->homeTeam]["PF"] += $score->awayScore; 
			$standings[$score->homeTeam]["PA"] += $score->homeScore;
			$standings[$score->awayTeam]["PF"] += $score->homeScore;
			$standings[$score->awayTeam]["PA"] += $score->awayScore;
			if($winner == $score->homeTeam) {
				$standings[$score->homeTeam]["HomeWins"]++;
			} else {
				$standings[$score->homeTeam]["HomeLosses"]++;
			}
			if($winner == $score->awayTeam) {
				$standings[$score->awayTeam]["AwayWins"]++;
			} else {
				$standings[$score->awayTeam]["AwayLosses"]++;
			}
		}
		$standings = $this->remapBreakDown($standings);
		$standings = $this->calcNetPts($standings);
		return $standings;
	}
	private function remapBreakDown($standings) {
		foreach($standings as $key => $val) {
			$standings[$key]["Home"] = $standings[$key]['HomeWins'] . ' - ' . $standings[$key]['HomeLosses'];
			$standings[$key]["Road"] = $standings[$key]['AwayWins'] . ' - ' . $standings[$key]['AwayLosses'];
			unset($standings[$key]['HomeWins']);
			unset($standings[$key]['HomeLosses']);
			unset($standings[$key]['AwayWins']);
			unset($standings[$key]['AwayLosses']);
		}
		return $standings;
	}
	private function calcNetPts($standings) {
		foreach ($standings as $key => $value) {
			$standings[$key]["NetPts"] = abs($value["PF"] - $value["PA"]);
		}
		return $standings;
	}
}
