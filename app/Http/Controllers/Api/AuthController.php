<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use App\User;

class AuthController extends Controller
{
    //

    public function register(Request $request)
    {
        $request->validate([
    		'email' => 'required',
    		'name' => 'required',
    		'password' => 'required'

    	]);

    	$user = User::firstOrNew(['email'=>$request->email]); 
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->save();

    	$http = new Client;

		$response = $http->post(url('oauth/token')), [
		    'form_params' => [
		        'grant_type' => 'password',
		        'client_id' => 2,
		        'client_secret' => 'KxpYKbfTwvY0gB0l4Wezrjx37SVMPcGwmjlNHaUN',
		        'username' => $request->email,
		        'password' => $request->password,
		        'scope' => ''
		    ],
		]);

	    return  response(['data'=>json_decode((string) $response->getBody(), true)]);
	    //return response(['data'=>dd(url('oauth/token'))]);
    }
}
