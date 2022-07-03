<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailtestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
	    $ip = '123.124.123.145';
		 Mail::raw('Hi user, a new login into your account from the IP Address: ' . $ip, function ($message) {
		$message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
		$message->to('joe@palala.me', 'Joe Palala');
	    });
    }
}
