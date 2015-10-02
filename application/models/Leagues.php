<?php

/**
 * This is a "CMS" model for the NFL League, but with hard-coded data,
 * this will be replaced with an actual database in future iterations
 * 
 * @author Andrew
 *
 */

class Leagues extends CI_Model {

	var $data = array(
		array(	
	 		'name' => 'New England Patriots',
	 		'logo' => 'image.jpg',
	 		'link' => '/ne',
	 		'key' => 'NE',
	 		'win' => '3',
	 		'loss' => '0',
	 		'tie' => '0'
		),
		array(	
	 		'name' => 'Seattle Seahawks',
	 		'logo' => 'image.jpg',
	 		'link' => '/sea',
	 		'key' => 'SEA',
	 		'win' => '1',
	 		'loss' => '2',
	 		'tie' => '0'
		),
		array(	
	 		'name' => 'Buffalo Bills',
	 		'logo' => 'image.jpg',
	 		'link' => '/buf',
	 		'key' => 'BUF',
	 		'win' => '2',
	 		'loss' => '1',
	 		'tie' => '0'
		),
		array(	
	 		'name' => 'New York Jets',
	 		'logo' => 'image.jpg',
	 		'link' => '/nyj',
	 		'key' => 'NYJ',
	 		'win' => '2',
	 		'loss' => '1',
	 		'tie' => '0'
		),
		array(	
	 		'name' => 'Miami Dolphins',
	 		'logo' => 'image.jpg',
	 		'link' => '/mia',
	 		'key' => 'MIA',
	 		'win' => '1',
	 		'loss' => '2',
	 		'tie' => '0'
		),
		array(	
	 		'name' => 'Cincinnati Bengals',
	 		'logo' => 'image.jpg',
	 		'link' => '/cin',
	 		'key' => 'CIN',
	 		'win' => '3',
	 		'loss' => '0',
	 		'tie' => '0'
		),
		array(	
	 		'name' => 'Pittsburgh Steelers',
	 		'logo' => 'image.jpg',
	 		'link' => '/pit',
	 		'key' => 'PIT',
	 		'win' => '2',
	 		'loss' => '1',
	 		'tie' => '0'
		),
		array(	
	 		'name' => 'Cleveland Browns',
	 		'logo' => 'image.jpg',
	 		'link' => '/cle',
	 		'key' => 'CLE',
	 		'win' => '1',
	 		'loss' => '2',
	 		'tie' => '0'
		),
		array(	
	 		'name' => 'Baltimore Ravens',
	 		'logo' => 'image.jpg',
	 		'link' => '/bal',
	 		'key' => 'BAL',
	 		'win' => '0',
	 		'loss' => '3',
	 		'tie' => '0'
		)
	);

	// Constructor
	public function __construct(){
		parent::__construct();
	}

	// Retrieve all of the teams
	public function all(){
		return $this->data;
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
