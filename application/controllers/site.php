<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller 
{
	public function index()
	{

		$this->load->view("view_home");
	}

	public function notes()
	{
		$this->load->model("get_db");
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{	
			if($_POST['insert'] == "yes")
			{
				$this->get_db->insertNewNote();
			}
		}
		$data['results'] = $this->get_db->getAll();
		$this->load->view("view_notes", $data);
	}

	public function insertNewNote()
	{
		$this->load->model("get_db");
		$this->get_db->insertNewNote();

		redirect(base_url() . "site/notes", "refresh");
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

	public function updateValues()
	{
		$this->load->model("get_db");
		$newRow = array(
			array(
				"id" => "3",
				"author" => "omar",
				"note" => "updated"
			),
			array(
				"id" => "4",
				"author" => "Bill Gates"
			)
		);	

		$this->get_db->update2($newRow);
	}

	public function deleteValues()
	{
		$this->load->model("get_db");
		$oldRow = array(
			"id" => "6"
		);	

		$this->get_db->delete1($oldRow);
	}
}