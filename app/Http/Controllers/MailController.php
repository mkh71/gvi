<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use \Carbon\Carbon;

class MailController extends Controller
{
	public function sendBasicEmail($send_to, $body, $subject) {
		Mail::send([], [], function ($message) use ($send_to, $body, $subject) {
		  	$message->to($send_to)
		    	->subject($subject)
		    	->setBody($body, 'text/html');
		});
	}


}
