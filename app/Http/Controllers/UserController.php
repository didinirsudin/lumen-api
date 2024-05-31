<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function show(Request $request){
		$validated = $this->validate($request,[
			'id'=>'required'
		]);
		$id = $validated['id'];
		$user = User::find($id);
		if($user){
			return response()->json([
				'success' => true,
				'message' => 'Data User',
				'data' => $user
			],201);
		}else{
			return response()->json([
				'success' => false,
				'message' => 'Data tidak tersedia'
			],400);
		}

	}
    //
}
