<?php

/**
 * This is a "CMS" model for teams, but with hard-coded data,
 * this will be replaced with an actual database in future iterations
 * 
 * @author Andrew
 *
 */

class Roster extends CI_Model {

	var $data = array(
		array(
			'first_name' => 'Frank',
			'last_name' => 'Clark',
			'grade' => '5.61',
			'position' => 'DE',
			'image' => './image.jpg'
		),
		array(
			'first_name' => 'Tyler',
			'last_name' => 'Lockett',
			'grade' => '5.62',
			'position' => 'WR',
			'image' => './image.jpg'
		),
		array(
			'first_name' => 'Terry',
			'last_name' => 'Poole',
			'grade' => '5.09',
			'position' => 'OG',
			'image' => './image.jpg'
		),
		array(
			'first_name' => 'Mark',
			'last_name' => 'Glowinski',
			'grade' => '5.5',
			'position' => 'OG',
			'image' => './image.jpg'
		),
		array(
			'first_name' => 'Tye',
			'last_name' => 'Smith',
			'grade' => '4.9',
			'position' => 'CB',
			'image' => './image.jpg'
		),
		array(
			'first_name' => 'Obum',
			'last_name' => 'Gwacham',
			'grade' => '5.31',
			'position' => 'DE',
			'image' => './image.jpg'
		),
		array(
			'first_name' => 'Kristjan',
			'last_name' => 'Sokoli',
			'grade' => '4.91',
			'position' => 'DT',
			'image' => './image.jpg'
		),
		array(
			'first_name' => 'Ryan',
			'last_name' => 'Murphy',
			'grade' => '0',
			'position' => 'DB',
			'image' => './image.jpg'
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
