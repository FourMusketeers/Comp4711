<?php

/**
 * This is a "CMS" model for teams, but with hard-coded data,
 * this will be replaced with an actual database in future iterations
 * 
 * @author Andrew
 *
 */

class Teams extends CI_Model {

	var $data = array(
		array(
			'name' => 'first',
			'wins' => 1,
			'losses' => 10
		),
		array(
			'name' => 'second',
			'wins' => 10,
			'losses' => 1
		),
		array(
			'name' => 'third',
			'wins' => 5,
			'losses' => 2
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
