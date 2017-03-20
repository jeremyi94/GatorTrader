<?php

class search{
	
	private $mysqli;

	public function __construct(){

		$this->connect();
	}

	private function connect(){
		$this->mysqli = new mysqli('localhost', 'root', 'root', 'snippets');
	}

	public function search($search_term){

		$sanitized = $this->mysqli->real_escape_string($search_term);

		$query = $this->mysqli->query("
		SELECT title
		FROM search
		WHERE title LIKE '%{$sanitized}%'
		OR body LIKE '%{$sanitized}%'
		");

		if (! $query->num_rows ) {
		return false;
		}

		while($row = $query->fetch_object()){
		$rows[] = $row;
		}

		$search_results = array(
			'count' => $query->num_rows, 'results => $rows,
			');

			return $search_results;
	}
}
