<?php

Class About extends Controller
{
	function index()
	{
		$data['page_title'] = "About";
		$this->view("medion/about-us",$data);
	}

}