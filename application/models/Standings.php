<?php

/**
 * 
 * @author Leon
 *
 */

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

		$this->updateDatabase();
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
		foreach($standings as $teamName => $standing) {
			echo $teamName;
			echo '<pre>';
			echo var_dump($standing);
			echo '</pre>';
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
		$record->teamScore = $scoreArray[1];
		return $record;
	}
	private function buildTeamStandings($scores) {
		$standings = array();
		foreach($scores as $score) {
			$winner = $score->homeScore > $score->teamScore ? $score->homeTeam : $score->awayTeam;
			$loser  = $score->homeScore < $score->teamScore ? $score->homeTeam : $score->awayTeam;
			echo "$winner : $loser" ;
			if(!isset($standings[$score->homeTeam])) {
				$standings[$score->homeTeam] = array(
						"win" => 0,
						"loss" => 0,
						"tie" => 0
					);
			}
			if(!isset($standings[$score->awayTeam])) {
				$standings[$score->awayTeam] = array(
						"win" => 0,
						"loss" => 0,
						"tie" => 0
					);
			}
			if($score->teamScore == $score->awayTeam) {
				$standings[$score->teamTeam]['tie']++;
				$standings[$score->homeTeam]['tie']++;
			} else {
				$standings[$winner]["win"]++;
				$standings[$loser]["loss"]++;
			}
		}
		return $standings;
	}
}
