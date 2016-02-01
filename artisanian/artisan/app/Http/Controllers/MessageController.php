<?php
namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Email;
use Illuminate\Routing\Controller;
use App\User;
use App\Message;
use App\TimeHelper;
class MessageController extends Controller{

	public function sendUserMessage(Request $request){
		/*Need to validate email*/

		$data = $request->all();

		if (null != count($data)) {

			/*User should not send a message to himself*/
			$checkOneSelfMsg = User::where('id', $request->input('user_ref'))->pluck('email');

			if (null != $checkOneSelfMsg && ($checkOneSelfMsg == $request->input('email'))) {
				return 'You cannot send a message to yourself';
			}else{
				$msg = new Message;
				$msg->sender_name 	= $request->input('name');
				$msg->senderPhone 	= $request->input('phone');
				$msg->msg_status 	= 0;
				$msg->msg_archive 	= 0;
				$msg->user_id 		= $request->input('user_ref');
				$msg->sender_email 	= $request->input('email');
				$msg->message 		= $request->input('message');
				if ($msg->save()) {
					return 'Message sent successfully';
				}else{
					return 'An error occured. Please try again';
				}
			}

			

		}else{
			return 'Please fill all the fields.';
		}
	}

}