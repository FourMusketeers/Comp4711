<?php

/**
 * This is a "CMS" model for the NFL League, but with hard-coded data,
 * this will be replaced with an actual database in future iterations
 * 
 * @author Andrew
 *
 */

class Leagues extend CI_Model {

	var $data = array(
		array(	
	 		'team_name' => 'Four Musketeers',
	 		'logo' => 'image.jpg',
	 		'link' => '/fourmusketeers',
	 		'location' => 'Vancouver'
		),
		array(	
	 		'team_name' => 'Potatotine',
	 		'logo' => 'image.jpg',
	 		'link' => '/potatotine',
	 		'location' => 'Calgary'
		),
		array(
	 		'team_name' => 'Tomato Team',
	 		'logo' => 'image.jpg',
	 		'link' => '/tomato',
	 		'location' => 'Ontario'
		),
		array(	
	 		'team_name' => 'Banana Team',
	 		'logo' => 'image.jpg',
	 		'link' => '/banana',
	 		'location' => 'Toronto'
		)
	);

	// Constructor
	public function __construct(){
		parent::__construct();
	}

	// Retrieve all of the team members
	public function all(){
		return $this->data;
	}

}
