<?php

class get_db extends CI_Model 
{
	function getAll()
	{
		$query = $this->db->query("SELECT * FROM Notes");

		return $query->result();
	}
}
