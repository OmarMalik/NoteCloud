<?php

class get_db extends CI_Model 
{
	function getAll()
	{
		$query = $this->db->query("SELECT * FROM Notes");
		return $query->result();
	}

	function insertNewNote()
	{
		$note = $_POST['note'];
		$author = "omar";
		$data = array(
			"author" => $author,
			"note" => $note
		);
		$this->db->insert("Notes", $data);
	}

	function insert1($data)
	{
		$this->db->insert("Notes", $data);
	}

	function insert2($data)
	{
		$this->db->insert_batch("Notes", $data);
	}

	function update1($data)
	{
		$this->db->update("Notes", $data, "id = 2");
	}

	function update2($data)
	{
		$this->db->update_batch("Notes", $data, "id");
	}

	function delete1($data)
	{
		$this->db->delete("Notes", $data);

	}

	/*function empty($data)
	{
		$this->db->empty($data);
	}*/
}
