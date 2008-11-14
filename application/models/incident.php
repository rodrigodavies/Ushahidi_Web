<?php defined('SYSPATH') or die('No direct script access.');

/**
* Report/Incidents Table Model
*/

class Incident_Model extends ORM
{
	protected $has_many = array('category' => 'incident_category', 'media', 'verify', 'comment', 'rating', 'alert' => 'alert_sent');
	protected $has_one = array('location','incident_person','user','message');
	
	// Database table name
	protected $table_name = 'incident';
}