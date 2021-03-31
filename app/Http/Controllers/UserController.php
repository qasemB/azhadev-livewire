<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\Captcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function userlogin(Request $request)
    {
        $input = $request->toArray();
        Validator::make($input, [
            'email' => 'required|email' ,
            'password' => 'required|string' ,
            'g-recaptcha-response' => new Captcha(),
        ])->validate();

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password],$request->filled('remember'))) {
                // Mail::raw("تست:" , function($message)use($request){
                //     $message->to($request->email)->subject('تغییر پسورد');
                // });
                return redirect('/');
            }else{
                return redirect()->back()->withErrors('مشکلی از سمت سرور پیش اومده');
            }
        }else{
            return redirect()->back()->withErrors('اطلاعات وارد شده صحیح نیست ');
        }

    }
}
