<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// Post variables coming view are Username, Password, Email.
// If the sign-up is failed, controller will redirect to the same page (signup.php) and displays the signup error.
// If the sign-up is successful, controller will redirect to the login page and displays successful login message.
require_once('facebook.php');
class Facebook_signup extends CI_Controller
{
	
	public function index() {
		$this->load->database();		
		$this->load->helper("form");
		$this->load->library("session");
		$this->load->helper('url');

//------------------	Configuring facebook AppId and secret key  ---------------------------// 		
		$config= array('appId'=>'219396778214076', 'secret'=>'aefdfc96498ddc26210ddd6af70c0274');
		$facebook= new Facebook($config);
		$user_id= $facebook->getUser();
//--------------------------------------------------------------------------------------------//

//------------------    It will check if the user is logged in and if he/she is logged in, extract data ------//		
		if($user_id){
			try {
//------------------	Intially setting variables to null to avoid the error of undefined variable if user's profile is not visible 						
				$high_school = "";
				$lang="";
				$college = "";
//--------------------------------------------------------------------------------------------------//
						
//-----------------     Extracting data from user profile -------------------------------------------------------//
				$data1= $facebook->api('/me');
				$name = isset($data1['name']) ? $data1['name'] : "";
				$gender = isset($data1['gender']) ? $data1['gender'] : "";
				$birthday = isset($data1['birthday_date']) ? $data1['birthday_date'] : "";
				$email = isset($data1['email']) ? $data1['email'] : "";
				$first_name = isset($data1['first_name']) ? $data1['first_name'] : "";
				$last_name = isset($data1['last_name']) ? $data1['last_name'] : "";
				$fb_link = isset($data1['link']) ? $data1['link'] : ""; 
				$pic = file_get_contents("http://graph.facebook.com/$user_id/picture?type=normal");
				$fileName = 'Assets/fb_image/'. $first_name .'.jpg';
				
				$file = fopen($fileName, 'w+');
				fputs($file, $pic);
				fclose($file);
				
				$ans = isset($data1['languages'])?count($data1['languages']) : 0;
				if($ans > 0)
					$lang = $data1['languages']['0']['name'];
				for($i=1; $i<$ans; $i++){
					$lang = $lang. "," .$data1['languages'][$i]['name'];
				}

				$date = new DateTime(isset($data1['birthday_date']) ? $data1['birthday_date'] : "");
				if($date == ""){
					$age=0;
				}
				else{
				$now = new DateTime();
				$age = $now->diff($date);
				$age = $age->format('%y');
				}
				$ans = isset($data1['education'])?count($data1['education']) : 0;

				for($i=0; $i<$ans; $i++){
					if($data1['education'][$i]['type'] == "College")
						$college = $data1['education'][$i]['school']['name'];
					if($data1['education'][$i]['type'] == "High School")
						$high_school = $data1['education'][$i]['school']['name'];			
				}
//----------------       Storing data into fb_internal table for our use ------------------ //				
				mysql_query("INSERT INTO fb_internal (name, first_name, last_name, fb_link, high_school, birthdate, college, gender, lang_known, age, email) VALUES ('".$name."','".$first_name."','".$last_name."','".$fb_link."','".$high_school."','".$birthday."','".$college."','".$gender."','".$lang."','".$age."','".$email."')");
				
//------------------------------------------------------------------------------------------------------//

//----------------       Data that are to be passed to the view to fill the details in sign-up form (register.php) -------------------------//
				$data = array(
					'name' => $name,
					'email' => $email,
					'first_name' => $first_name,
					'last_name' => $last_name,
					'college' => $college,
					'age' => $age,
					'birthday' => $birthday,
					'lang' => $lang,
					'gender' => $gender,
					'pic' => $fileName
					);
//---------------------------------------------------------------------------------------------------------------//	


			}catch( FacebookApiException $e ){
				$user_id = null;
				$e->getType();
				$e->getMessage();
			}
		}
//-----------------       When the user log in to facebook, redirect him/her to the sign-up page ---------------------------//
		if( $user_id ){ 
			$href = $facebook->getLogoutUrl(); 
			$this->load->view('register',$data); 
			
		}
//----------------        Provide facebook login to the user --------------------------------------------------------------//	
		else{
			$permission= array('scope' => 'email');
			$href= $facebook->getLoginUrl($permission); 
			redirect($href); 
		}
		?>
<?php	}

}
?>
