<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends AppController {

	public function index()
	{
		$this->template->set_template('layout/app');
		$this->template->content->view('index');
		$this->template->publish();
	}


}