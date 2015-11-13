<?php

/**
 * This is a "CMS" model for the NFL League, but with hard-coded data,
 * this will be replaced with an actual database in future iterations
 * 
 * @author Andrew
 *
 */

class Leagues extends MY_Model {

	// Constructor
	public function __construct() {
       parent::__construct('Leagues', 'TeamName'); 
    }

	// Retrieve single team by team key
	public function getTeamByKey($key){
		// Iterate over data until we find one with matching key
		foreach($this->data as $team)
			if($team['key'] == $key)
				return $team;
		return null;
	}
}
