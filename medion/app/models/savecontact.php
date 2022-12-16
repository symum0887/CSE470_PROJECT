<?php

class Savecontact{

    function contact($POST)
	{

		$DB = new Database();

		$_SESSION['error'] = "";
		if(isset($POST['name']) && isset($POST['email']))
		{

			$arr['name'] = $POST['name'];
			$arr['email'] = $POST['email'];
            $arr['subject'] = $POST['subject'];
            $arr['message'] = $POST['message'];
			$arr['url_address'] = get_random_string_max(60);
			$arr['date'] = date("Y-m-d H:i:s");

			$query = "insert into contact (name,email,url_address,date,subject,message) values (:name,:email,:url_address,:date,:subject,:message)";
			$data = $DB->write($query,$arr);
			
			if($data)
			{	
				header("Location:". ROOT . "home");
				die;
			}

		}else{

			$_SESSION['error'] = "please enter a valid username and password";
		}
	}

}