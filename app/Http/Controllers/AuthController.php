<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
class AuthController extends Controller
{

	public function register(Request $request){
		$validated = $this->validate($request,[
			'name' => 'required|max:255',
			'email'=>'required|email|max:255|unique:users,email',
			'password'=>'required'
		]);
		$name = $validated['name'];
		$email = $validated['email'];
		$password = Hash::make($validated['password']);
		$register = User::create([
			'name'=>$name,
			'email'=>$email,
			'password'=>$password
		]);
		if($register){
				return response()->json([
					'success' => true,
					'message' => 'Register Succes',
					'data' => $register
				],201);
			}else{
				return response()->json([
					'success' => false,
					'message' => 'Register Fail',
					'data' => $register
				],400);
			}
	}
	public function login(Request $request){
		$validated = $this->validate($request,[
			'email'=>'required|email|max:255',
			'password'=>'required'
		]);
		$email = $validated['email'];
		$password = $validated['password'];
		$user = User::where('email',$email)->first();
		if(Hash::check($password,$user->password)){
			$apitoken = base64_encode(Str::random(40));
			$user->update([
				'api_token' => $apitoken
			]);
			return response()->json([
				'success' => true,
				'message' => 'Login Succes',
				'data' => [
					'name' => $user->name,
					'email' => $user->email,
					'api_token' => $apitoken
				]
			],201);
		}else{
			return response()->json([
				'success' => false,
				'message' => 'Login Fail'
			],400);
		}

	}
}
