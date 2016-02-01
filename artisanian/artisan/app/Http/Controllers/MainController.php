<?php
namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Email;
use Illuminate\Routing\Controller;
use App\User;
use App\Review;
use App\Experience;
use App\Profession;
use App\Reference;
use App\TimeHelper;
class MainController extends Controller{
	public function index(){

		$Art = \DB::table('users')
		->join('professions', 'users.id', '=', 'professions.user_id')
		->select('users.id', \DB::raw('CONCAT(users.fName, " ", users.lName) AS fullName'), 
			'professions.location', 'professions.jobTitle', 'users.account_type', 
			'users.profilePic', 'users.created_at', 'professions.skills')
		->orderBy('users.id', 'desc')->get();

		return view("home")->with(['art' => $Art]);
	}

	public function addArtisan(){
		return view("signup");
	}

	public function postAddArtisan(Request $request){
		$email = $request->input("email");
		$users = \DB::table("users")->where("email", $email)->first();

		if (count($users) > 0) {
			
			return "User with this email already exists";
		}else{
			/*Procede to registration*/
			$newUser = new User;
			$userMail = $request->input("email");
			$newUser->email = $userMail;
			$newUser->fName = "New User";
			$newUser->lName = "New User";
			$newUser->url = "";
			$newUser->about = $request->input("description");
			$newUser->facebook = "";
			$newUser->twitter = "";
			$newUser->password = "";
			$newUser->profilePic = "";
			$newUser->gender = "";
			$code = str_random(30);
			$newUser->activationCode = $code;
			$newUser->temp_password = "";
			$newUser->accountStatus = 0;
			$newUser->account_type = "Basic";
			/*$newUser->profession = $request->input("jobTitle");*/

			if ($newUser->save()) {

				$getLast = \DB::table('users')->where("email", $userMail)->first();
				$time = strtotime($getLast->created_at);
				$activation = $getLast->activationCode;
				$fakeID = ($getLast->id * 9)+ 11;

				/*Add to professsion*/
				$prof = new Profession;
				$prof->user_id = $getLast->id;
				$prof->location = $request->input('location');
				$prof->jobType = $request->input('jobType');
				$prof->jobCategory = "";
				$prof->jobAvailability = $request->input('availabilty');
				$prof->description = $request->input('description');
				$prof->skills = $request->input('skills');
				$prof->jobTitle = $request->input('jobTitle');
				$prof->employmentStatus = "";


				$prof->save();

				$url = "http://localhost:8000/continue-reg/";
				/*Send Email*/
				\Mail::send("email", 
					$data = array(
						"subjectMsg" => "Welcome to Artisanian Pro",
						"msgLink" => $url.$fakeID."/".$code."/".$time."/",
						"userMail" => $userMail
						), function($message) use ($data)
					{
						$message->from("no-reply@artisanian.com", "Artisanian Pro Team");
						$message->to($data["userMail"])->subject("Welcome to Artisanian");
					});

				return "success";
			}else{
				return "An error occured while signing you up. Please try again";
			}

		}
	}


	public function getAllpro(){
		$getSearchedArt = \DB::table('users')
		->join('professions', 'users.id', '=', 'professions.user_id')
		->select('users.id', \DB::raw('CONCAT(users.fName, " ", users.lName) AS full_name'), 
			'professions.location', 'professions.jobTitle', 'users.account_type', 
			'users.profilePic', 'users.created_at', 'professions.skills')
		->orderBy('id', 'desc')
		->paginate(15);

		return view("allpro")->with(['data' => $getSearchedArt]);
		/*->where('users.accountStatus', '=', 0)*/
	}


	/*Password*/
	function randStrGen($len = 8){
		$result = "";
		$chars = "abcdefghijklmnopqrstuvwxyz\$_?!-0123456789";
		$charArray = str_split($chars);
		for($i = 0; $i < $len; $i++){
			$randItem = array_rand($charArray);
			$result .= "".$charArray[$randItem];
		}
		return $result;
	}

	/*if (Auth::attempt(["email" => $email, "password" => $password])) {
            // Authentication passed...
			return redirect()->intended("dashboard");
		}*/

		public function getArtisanDetails($fakeId, $location, $fName){
			//die($fakeId);
			$detail = \DB::table('users')->where([
				'users.id' => $fakeId,
				'users.created_at' => date('Y-m-d H:i:s', $fName)
				])
			->join('professions', 'users.id', '=', 'professions.user_id')
			->select('users.*', 'professions.*')->first();
			//print_r($detail);

			$getRef = \DB::table('references')
			->where('references.userRef', $fakeId)->get();

			$getExp = \DB::table('experiences')
			->where('experiences.userid', $fakeId)->get();

			$review = \DB::table('reviews')->where('user_id', $fakeId)
			->join('users', 'reviews.commentator_id', '=', 'users.id')
			->distinct('reviews.commentator_id')
			->select('reviews.comment', 'reviews.commentedBy', 'reviews.created_at', 'users.profilePic')->get();

			if (count($detail)) {
				
				//echo "<pre>", print_r($response), "</pre>";

				return view("details")->with([
					'userData' => $detail, 
					'extra' => $getRef,
					'ref' => $getExp,
					'user' => $fakeId,
					'local' => $location,
					'timer' => $fName,
					'revData' => $review
					]);

				//console.log($response);
				//return \Response::json($response);

			}else{
				return view('errors.404');
			}

		}




		public function getCompletionReg($user_id, $regRef, $numeric){
			$id = ($user_id - 11) / 9;
			$checkUser = \DB::table('users')->where(array(
				"id" => $id,
				"activationCode" => $regRef,
				"created_at" => date("Y-m-d H:i:s", $numeric)
				))->first();

			if (count($checkUser) > 0) {

				return view("completion.wizard")->with([
					'existUsr' => 'Welcome, '.$checkUser->email.', you are just a few steps away to complete your registration.',
					'passID' => $user_id,
					'passRef' => $regRef,
					'passNum' => $numeric
					]);
			}else{
				return view("completion.wizard")->with("noUser", "Invalid activation link. No such user exists or Account already activated. Please the link sent yo your email.");
			}

		}


		public function postContinueReg($user_id, $regRef, $numeric, Request $request){

			/*if ($request->hasFile('profilePic')) {*/
				$destinationPath = 'images/profiles';
				$extension = $request->file('profilePic')->getClientOriginalExtension(); // getting image extension
				$fileName = rand(11111,99999).'.'.$extension; // renaming image	

				if (\Timer::ImageValidator($extension) == true) {
					$request->file('profilePic')->move($destinationPath, $fileName);
				}else{
					return 'Invalid file type selected for profile picture. Please select an image.';
				}


      		//}


				$id = ($user_id - 11) / 9;
				\DB::table('users')->where(array(
					"id" => ($user_id - 11) / 9,
					"created_at" => date('Y-m-d H:i:s', $numeric)
					))->update([
				'fName' => $request->input('fName'),
				'lName' => $request->input('lName'),
				'url'   => $request->input('url'),
				'facebook' => $request->input('facebook'),
				'twitter' => $request->input('twitter'),
				'phone' => $request->input('phone'),
				"activationCode" => "",
				'password' => Hash::make($request->input('newpassword')),
				'profilePic' => $fileName,
				'gender' => $request->input('gender'),
				'accountStatus' => 1,
				'address' => $request->input('address')
				]);

					/*Experience*/
					if (count($request->input('employer'))) {
						foreach ($request->input('employer') as $key => $employer) {
							$exp = new Experience;
							$exp->userid = ($user_id - 11) / 9;
							$exp->employer = $employer;
							$exp->responsability = $request->input('post')[$key];

							$exp->save();
						}
					}


					/*References*/
					if (count($request->input('reference'))) {
						foreach ($request->input('reference') as $key => $reference) {
							$ref = new Reference;
							$ref->userRef = ($user_id - 11) / 9;
							$ref->refNames = $reference;
							$ref->refContact = $request->input('refNum')[$key];

							$ref->save();
						}
					}

					

					\DB::table('professions')->where('user_id', ($user_id - 11) / 9)
					->update(array(
						'jobCategory' => $request->input('jobCategory'),
						'employmentStatus' => $request->input('employmentStatus')
						));

					return "success";
				}


				/*Search result*/
				public function getSearchResult($service, $local, $cat){
					$getSearchedArt = \DB::table('users')->join('professions', 'users.id', 'professions.user_id')
					->where(array(
						'professions.jobTitle' => ['LIKE' => '%'.$service.'%'],
						'professions.location' => ['LIKE' => '%'.$local.'%'],
						'professions.jobCategory' => ['LIKE' => '%'.$cat.'%']
						))->get();
				}




				public function postMapCheck(Request $request){
					$data = $request->all();
					if (count($data)) {

						//$address = 

						$param = array(
							"address"=> $request->input('address'),
							"components"=>"country:NG"
							);

						$response = \Geocoder::geocode('json', $param);

						return $response;

					}
				}




				public function postReview(Request $request){
					if (count($request->all())) {
						/* 
						*  Review text exist
						*  Check if user is logged in
						*
						*/

						if (Auth::check()) {
							$postedBy = Auth::user()->id;

							$getCommentator = \DB::table('users')->where('id', $postedBy)->first();

							if ($getCommentator) {

								/*If user attempt to post a review for oneself*/
								if ($getCommentator->id == $request->input('ToUserID')) {
									return 'You can not post a review for yourself';
								}else{
									if (null == $request->input('comment')) {
										return "Please type your review";
									}else{
										$reviewPost = new Review;

										$reviewPost->user_id =  $request->input('ToUserID');
										$reviewPost->comment =  $request->input('reviewText');
										$reviewPost->commentator_id = $getCommentator->id;
										$reviewPost->commentedBy = $getCommentator->fName.' '.$getCommentator->lName;

										if ($reviewPost->save()) {
											return 'Thank you for your review. User will be rated accordingly.';
										}
									}
								}
							}

						}else{
							return "Please log in to post a review";
						}
					}else{
						return "Please type your review";
					}
				}


				/*If user login using modal, on attempt to post a review*/
				public function postUserLoginOnModal(Request $request){
					if (Auth::attempt([
						"email" => $request->input('email'), 
						"password" => $request->input('password'), 
						"accountStatus" => 1
						])) {
						//return redirect()->intended("dashboard");
						return \Response::json(Auth::user());
				}else{
					return 'Invalid email or password and/or account has not be activated.'; 
				}
			}

			/*Autocomplete*/
			public function getAutocomplete(Request $request){
				$term = $request->input('term');

				$results = array();

				$queries = \DB::table('professions')
				->join('users', 'professions.user_id', '=', 'users.id')
				->where('jobTitle', 'LIKE', '%'.$term.'%')
				->orWhere('jobCategory', 'LIKE', '%'.$term.'%')
				->distinct('jobTitle')
				->select('users.profilePic', 'professions.id AS ref','professions.jobTitle', 'professions.location')
				->take(10)->get();

				foreach ($queries as $query)
				{
					$results[] = [ 'id' => $query->ref, 'value' => $query->jobTitle.' - '.$query->location];
				}
				return \Response::json($results);
			}


			/*Location complete*/
			public function getLocationComplete(Request $request){
				$term = $request->input('term');

				$results = array();

				$queries = \DB::table('professions')
				->join('users', 'professions.user_id', '=', 'users.id')
				->where('location', 'LIKE', '%'.$term.'%')
				->distinct('location')
				->select('users.profilePic', 'professions.id AS ref','professions.jobTitle', 'professions.location')
				->take(10)->get();

				foreach ($queries as $query)
				{
					$results[] = [ 'id' => $query->ref, 'value' => $query->location];
				}
				return \Response::json($results);
			}

			



			public function getFlushUser(){
				Auth::logout();
				return redirect("/");
			}

		}