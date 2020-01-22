<?php
class Api_model extends CI_Model
{
	

	function insert_api($data)
	{
		$this->db->insert('customer', $data);
	}

	
}

?>