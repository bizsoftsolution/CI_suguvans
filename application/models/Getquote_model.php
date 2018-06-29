<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getquote_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	function Addquote($data)
	{
		if($this->db->insert('tbl_getquote', $data))
		{
			return true;
		}
		else
		{
			return false;
		}		
	}


}
