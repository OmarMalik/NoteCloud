<?php

class get_db extends CI_Model 
{
	function getAll()
	{
		$query = $this->db->query("SELECT * FROM Notes");
		return $query->result();
	}

	function insert1($data)
	{
		$this->db->insert("Notes", $data);
	}

	function insert2($data)
	{
		$this->db->insert_batch("Notes", $data);
	}

}
