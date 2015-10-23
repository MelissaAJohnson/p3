<?php 

namespace Melissajstudent\SimplePassword;
use App\Http\Controllers\Controller;
use App\User;

class SimplePasswordController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

	public function getIndex() {

		/**
		* Arrays of possible values
		*
		* @return Response
		*/
			$random_words = array(
			"pride",
			"vikings",
			"minnesota",
			"purple",
			"football",
			"touchdown",
			"goal",
			"dome",
			"timeout"
		);

			$characters = array(
			"@",
			"#",
			"%",
			"&"
		);

		$password = "";


		# 2. Grab number of words to include from form
		$count = 3;

		# 3. Build password by adding to the string per number of words specified
		$i = 0;
		while ($i<$count-1) {
			$r = rand(0,8); 
			$password = $password.$random_words[$r]."-";
			$i++;
		};
		# this randomly selects another word from array and places it at the end
		$r = rand(0,8); 
		$password = $password.$random_words[$r];
		return password;
		# (debug) echo "Password is ".$password;

		# 4. add number to string if boolean is true				
		#if($_POST["number"]) {
		#	$random = rand(0,8);
		#	$password = $password."-".$random;
		#}

		# 5. add special character to string if boolean is true 
		#if($_POST["character"]) {
		#	$char_rand = rand(0,3);
		#	$password = $password."-".$characters[$char_rand];
		#}
	}
}