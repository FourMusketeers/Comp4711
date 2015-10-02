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
			'first_name' => 'Malcom',
			'last_name' => 'Brown',
			'grade' => '6.23',
			'position' => 'DT',
			'image' => 'image.png'
		),
		array(
			'first_name' => 'Jordan',
			'last_name' => 'Richards',
			'grade' => '5.22',
			'position' => 'SS',
			'image' => 'image.png'
		),
		array(
			'first_name' => 'Geneo',
			'last_name' => 'Grissom',
			'grade' => '5.29',
			'position' => 'DE',
			'image' => 'image.png'
		),
		array(
			'first_name' => 'Trey',
			'last_name' => 'Flowers',
			'grade' => '5.55',
			'position' => 'DE',
			'image' => 'image.png'
		),
		array(
			'first_name' => 'Tre',
			'last_name' => 'Jackson',
			'grade' => '5.72',
			'position' => 'OG',
			'image' => 'image.png'
		),
		array(
			'first_name' => 'Shaq',
			'last_name' => 'Mason',
			'grade' => '5.3',
			'position' => 'C',
			'image' => 'image.png'
		),
		array(
			'first_name' => 'Joe',
			'last_name' => 'Cardona',
			'grade' => '5.2',
			'position' => 'LS',
			'image' => 'image.png'
		),
		array(
			'first_name' => 'Matthews',
			'last_name' => 'Wells',
			'grade' => '0',
			'position' => 'LB',
			'image' => 'image.png'
		),
		array(
			'first_name' => 'A.J.',
			'last_name' => 'Derby',
			'grade' => '5.13',
			'position' => 'TE',
			'image' => 'image.png'
		),
		array(
			'first_name' => 'Darryl',
			'last_name' => 'Roberts',
			'grade' => '5.3',
			'position' => 'CB',
			'image' => 'image.png'
		),
		array(
			'first_name' => 'Xzavier',
			'last_name' => 'Dickson',
			'grade' => '5.0',
			'position' => 'OLB',
			'image' => 'image.png'
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
