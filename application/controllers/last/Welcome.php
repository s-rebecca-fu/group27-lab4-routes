<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		//$authors = array ();

        //point record to the end of source array
        $record=end($source);
        //$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where'], 'what' => $record['what']);

		$this->data['who'] = $record['who'];
        $this->data['mug'] = $record['mug'];
        //$this->data['href'] = $record['where'];
        $this->data['what'] = $record['what'];

		$this->render();
	}

}
