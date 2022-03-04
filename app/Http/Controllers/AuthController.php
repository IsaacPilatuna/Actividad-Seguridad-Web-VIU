<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\DniValidation;
use App\Rules\IbanAccountNumberValidation;
use App\Rules\NoDigitValidation;
use App\Rules\PhoneValidation;
use App\Rules\StrongPasswordValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class AuthController extends Controller
{

    public function getLogin(){
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/account');
        }

        return back()->withErrors([
            'email' => 'Credenciales no válidas',
        ]);
    }

    public function getSignUp(){
        $countries = ['España','Ecuador','Colombia','Perú','Canadá','Estados Unidos','Argentina'];
        return view('sign-up')->with('countries',$countries);
    }

    public function signUp(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','between:2,20', new NoDigitValidation],
            'lastName' => ['required','between:2,40', new NoDigitValidation],
            'dni' => ['required',new DniValidation],
            'email' => 'required|unique:users|email',
            'phone' => ['sometimes','nullable',new PhoneValidation],
            'password' => ['required','confirmed',new StrongPasswordValidation],
            'password_confirmation'=>'required',
            'accountNumber' => ['required', new IbanAccountNumberValidation],
            'about' => 'sometimes|nullable|between:20,250'
        ]);
        try {
            $user =new User();
            $user->name=$request->get('name');
            $user->lastName=$request->get('lastName');
            $user->dni=$request->get('dni');
            $user->email=$request->get('email');
            $user->country=$request->get('country');
            $user->phone=$request->get('phone');
            $user->password= bcrypt($request->get('password')) ;
            $user->accountNumber=$request->get('accountNumber');
            $user->about=$request->get('about');
            $user->save();
            return redirect('/login')->with('success', Lang::get('alerts.success'));;
        } catch (\Exception $th) {
            return back()->withErrors([
                'error' =>  Lang::get('alerts.failed')
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function getAccount(){
        $user = Auth::user();
        return view('account')->with('user',$user);
    }

}
