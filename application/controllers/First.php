<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';
		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where'], 'what' =>  $record['what']);
		}
		
		//$rand_keys = rand(0, sizeof($authors)-1);
		
		$result = array($authors[0]);
		
		$this->data['authors'] = $result;
		$this->render();
	}

}
