<?php

Class Contact extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Contact Us";

		  if(isset($_POST['email']))
 	 	{
 	 		$con = $this->loadModel("savecontact");
 	 		$con->contact($_POST);
		}
		$this->view("medion/contact",$data);
	}

}