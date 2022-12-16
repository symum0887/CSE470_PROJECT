<?php

Class Book_car{
    function book($POST)
	{

		$DB = new Database();
		$_SESSION['error'] = "";
		if(isset($POST['fname']) && isset($POST['email']))
		{

			$arr['fname'] = $POST['fname'];
            $arr['lname'] = $POST['lname'];
			$arr['email'] = $POST['email'];
			$arr['carmodel'] = $POST['carmodel'];
            $arr['phonenumber'] = $POST['phonenumber'];
            $arr['addressline'] = $POST['addressline'];
            $arr['city'] = $POST['city'];
            $arr['country'] = $POST['country'];
			$arr['date'] = date("Y-m-d H:i:s");
			$query = "insert into bookcar (fname,lname,carmodel,email,phonenumber,date,addressline,city,country) values (:fname,:lname,:carmodel,:email,:phonenumber,:date,:addressline,:city,:country)";
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