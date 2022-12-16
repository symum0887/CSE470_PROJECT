<?php

Class Bookcar extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Confirmation";

		  if(isset($_POST['email']))
 	 	{
 	 		$con = $this->loadModel("book_car");
 	 		$con->book($_POST);
		}
 	 	
		$this->view("medion/bookcar",$data);
	}

}