<?php

Class Single_post extends Controller 
{
	function index($link = '')
	{
 	 	
		if($link == "")
		{
			$data['page_title'] = "Image not found";
			$this->view("medion/not_found",$data);
		}else{

	 	 	$posts = $this->loadModel("posts");
	 	 	$result = $posts->get_one($link);

	 	 	$data['post'] = $result;
	 	 	
	 	 	$data['page_title'] = "Single Post";
			$this->view("medion/single_post",$data);
		}

	}

}