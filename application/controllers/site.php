<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller 
{
	public function index()
	{
		$this->load->view("view_home");
	}

	public function getValues()
	{
		$this->load->model("get_db");

		$data['results'] = $this->get_db->getAll();
	
		$this->load->view("view_db", $data);
	}

	public function insertValues()
	{
		$this->load->model("get_db");
		$newRow = array(
			array(
				"author" => "batch1",
				"note" => "insert test batch"
			),
			array(
				"author" => "batch2",
				"note" => "insert test batch2"
			)
		);
		$this->get_db->insert2($newRow);
	}
}