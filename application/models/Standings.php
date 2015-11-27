<?php

/**
 * 
 * @author Leon
 *
 */

class Standings extends MY_Model {
	// Constructor
	public function __construct(){
		parent::__construct('Leagues', 'TeamName'); 
		$this->xml = simplexml_load_file('mock_data/standings.xml');
	}
	
	public function updateDatabase() {
		$teams = array();
		foreach($this->xml->team as $team) {
			$team = $this->objectMapping($team);
			if(parent::exists($team->TeamName)) {
				parent::update($team);
			} else {
				parent::add($team);
			}
		}
	}
	private function objectMapping($team) {
		$record = new stdClass();
		$record->TeamName = (string) $team->fullname;
		//$record->code = (string) $team['code'];
		$record->conference = (string) $team['conference'];
		$record->divisionName = (string) $team['division'];
		$record->Win = (string) $team->totals->wins;
		$record->Loss = (string) $team->totals->losses;
		$record->Tie = (string) $team->totals->ties;
		$record->PF = (string) $team->totals->for;
		$record->PA = (string) $team->totals->against;
		$record->NetPts = (string) $team->totals->net;
		$record->Home = (string) $team->breakdown->home;
		$record->Road = (string) $team->breakdown->road;
		$record->Division = (string) $team->breakdown->indiv;
		$record->Conf = (string) $team->breakdown->inconf;
		$record->NonConf = (string) $team->breakdown->nonconf;
		$record->Streak = (string) $team->recent->streak;
		$record->Last5 = (string) $team->recent->last5;

		return $record;
	}
}
