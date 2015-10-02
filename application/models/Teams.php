<?php

/**
 * This is a "CMS" model for teams, but with hard-coded data,
 * this will be replaced with an actual database in future iterations
 * 
 * @author Andrew
 *
 */

class Teams extend CI_Model {

	var $data = array(
		array(	
	 		'first_name' => 'Andrew', 
 			'last_name' => 'Morishita', 
 			'number' => '1', 
	 		'position' => 'Running Back',
 			'team_name' => 'Four Musketeer',
 			'image'=> '/image.jpg',
 			'link' => '/amorishita'
		),
		array(	
	 		'first_name' => 'Jens', 
 			'last_name' => 'Christiansen', 
 			'number' => '2', 
	 		'position' => 'Quarterback',
 			'team_name' => 'Four Musketeer',
 			'image'=> '/image.jpg',
 			'link' => '/jchristiansen'
		),
		array(	
	 		'first_name' => 'Leon', 
 			'last_name' => 'Ho', 
 			'number' => '3', 
	 		'position' => 'Center',
 			'team_name' => 'Four Musketeer',
 			'image'=> '/image.jpg',
 			'link' => '/lho'
		),
		array(	
	 		'first_name' => 'Duy', 
 			'last_name' => 'Le', 
 			'number' => '4', 
	 		'position' => 'Referee',
 			'team_name' => 'Four Musketeer',
 			'image'=> '/image.jpg',
 			'link' => '/dle'
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
