<?php


namespace App\Http\Responses;



use Illuminate\Support\Facades\Auth;

class LoginResponse implements \Laravel\Fortify\Contracts\LoginResponse
{

    public function toResponse($request)
    {
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return view('admin.index')  ;
        }
//        if(Auth::attempt($credentials) && Auth::user()->role->id == 1){
//            return redirect()->route('admin.index');
//        }
//        if(Auth::attempt($credentials) && Auth::user()->role->id == 2){
//            return "Hello user logined";
//        }
return 1;
    }
}
