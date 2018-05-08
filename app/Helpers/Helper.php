<?php

namespace App\Helpers;

class Helper 
{

	//for this function we will have to pass parameter passwordFunction(8,"abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789") like this.
	 // public static function passwordFunction($len, $set="")
  //       {
  //           $gen ="";
  //           for($i =0; $i<$len; $i++)
  //           {
  //               $set = str_shuffle($set);
  //               $gen .= $set[0];
  //           }
  //           return $gen;
  //       }
	public static function generateStrongPassword($length = 6, $add_dashes = false, $available_sets = 'luds')
	{
		$sets = array();
		if(strpos($available_sets, 'l') !== false)
			$sets[] = 'abcdefghjkmnpqrstuvwxyz';
		if(strpos($available_sets, 'u') !== false)
			$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
		if(strpos($available_sets, 'd') !== false)
			$sets[] = '23456789';
		if(strpos($available_sets, 's') !== false)
			$sets[] = '!@#$%&*?';
		$all = '';
		$password = '';
		foreach($sets as $set)
		{
			$password .= $set[array_rand(str_split($set))];
			$all .= $set;
		}
		$all = str_split($all);
		for($i = 0; $i < $length - count($sets); $i++)
			$password .= $all[array_rand($all)];
		$password = str_shuffle($password);
		if(!$add_dashes)
			return $password;
		$dash_len = floor(sqrt($length));
		$dash_str = '';
		while(strlen($password) > $dash_len)
		{
			$dash_str .= substr($password, 0, $dash_len) . '-';
			$password = substr($password, $dash_len);
		}
		$dash_str .= $password;
		return $dash_str;
	}
          //------------OTHER CODE FOR RANDOM PASSWORD GENERATE --------- 

    // public function randomPassword()
    // {
    //     $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    //     $pass = array(); //remember to declare password as an array.
    //     $passlength = strlen($alphabet) -1;
    //     for($i = 0; $i < 8; $i++)
    //     {
    //         $n = rand(0, $passlength);
    //         $pass[] = $alphabet($n);
    //     }
    //     $this->password = implode($pass);
    // }
}


