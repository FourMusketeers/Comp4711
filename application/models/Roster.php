<?php

/**
 * This is a "CMS" model for teams, but with hard-coded data,
 * this will be replaced with an actual database in future iterations
 * 
 * @author Andrew
 *
 */

class Roster extends MY_Model {
	// Constructor
	public function __construct(){
		parent::__construct('Players', 'PlayerID');
	}

}
