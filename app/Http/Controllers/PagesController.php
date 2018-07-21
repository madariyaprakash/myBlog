<?php  

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\USer;
use Mail;
use Session;
use App\Reply;
use Illuminate\Support\Facades\Auth;

Class PagesController extends Controller{

/* More information for Controller :- 
a) To post the data from and reprocess.
b) To work with modal 
c) To rendered the direct HTML view page.
d) work with View page also to pass the data and retrieve the data.
e) process variable data and params.

*/
	// public function __construct() {
 //        $this->middleware('auth');  // to restrict permission to open the post records for guest users.
 //    }

	public function getIndex(){
		#return "Hello Home page";   //we can directly pass the string value also.
		//return view("pages.welcome");  // we can directly render the page and this the best feature of the MVC seperation.

		//HERE WE ARE USING QUERY BUILDER CONCEPT TO LIMIT THE DATA PASSING THE POST DATAS TO THE MAIN PAGE.
		$posts = Post::orderby('created_at', 'desc')->limit(3)->get();
		//$users= User::all();
		return view("pages.welcome")->withPosts($posts);
	}

	public function getAbout(){

		//here we will see how can we pass the data to the view using controller
		//Using with() method we can pass the data, and using {{abc}} we can pass the parameter. 
		$first ='Prakash';
		$last = 'Madariya';
		$fullname = $first." ".$last; // contacatanation of the first and last name.
		$email ='tak2prakash@gmail.com';
		$mobile = 7416278044;

		//now we can take as array also that will be more concise than writing seperately.
		$country = 'India';
		$city = 'Bhilai';

		$address =[];  //create array
		$address['country']= $country;
		$address['city'] = $city;   // here we can pass as variable value
		$address['pincode'] =490023; // either we can pass also direct value. no need to create varaible
 		 
		//here we can return the data in two way
		// 1st way - return view("pages.about") ->with("fullname", $fullname); 
		//to make this method writing easy we can change the with->("abc", $abc) to withAbc($abc)
		return view("pages.about")->withFullname($fullname)->withEmail($email)->withMobile($mobile)->withAddress($address); 
	}

	public function getContact(){
		return view("pages.contact");
	}

	public function postContact(Request $request){
		$this->validate($request, [
			'email' 	=> 'required|email',
			'subject' 	=> 'min:3',
			'message' 	=> 'min:10',
			'a_file'	=> 'required|max:10000|mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls'
			// 'a_file'	=> 'required|mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls'
		]);

		//here to pass the validate value we need to create another array and store those value that array varaible becaue directly we can not pass the request array values so for that we created another $data array. to pass to the view.
		$data = array(
			'email' 		=> $request->email,
			'subject' 		=> $request->subject,
			'bodyMessage' 	=> $request->message,
			'a_file'		=> $request->a_file

		);

		//here emails.contact we created view to show in to the mail 
		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('codellipse@gmail.com');
			$message->subject($data['subject']);
			$message->attach($data['a_file']->getRealPath(),array(
				'as'=>$data['a_file']->getClientOriginalName(),
				'mimes'=>$data['a_file']->getMimeType()
			));		
		});

		Session::flash('success', 'Your mail was sent !');

		return redirect('/');
	}

	public function getVideoTutorials(){
		return view ("video_tutorials.tuto_main");
	}
	public function getProjects(){
		return view ("projects.proj_main");
	}
	 
	public function getCow(){
			// $cow_reply = Reply::all();
			return view ("pages.cow");
	}
}

