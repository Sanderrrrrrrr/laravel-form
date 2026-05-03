<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logInAuth;
use Illuminate\Support\Facades\Hash;

class theController extends Controller
{
    public function sessioner(){

        $logins = session()->get('logIn', []);

        return view('logIn', [
            'logins' => $logins
        ]);
    }

    public function validator(){
        // $corEmail = 'admin@gmail.com';
        // $corPass = '123456';

        request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $email = request('email');
        $password = request('password');

        $user = logInAuth::where('email', $email)->first();

        if($user && Hash::check($password, $user->password)){
        session()->push('logIn',[
            'email' => request('email'), 
            'password' => request('password')]);
        return redirect('/home'); } else {
            return redirect('/')
            ->with('error', 'Email or Password incorrect!')
            ->withInput();
        }
    }

    public function sessionCleaner(){

        session()->forget('logIn');
        return redirect("/");

    }

    public function homePage(){
        $logIns = session()->get('logIn', []);
        $data = end($logIns);
        
        return view('home', [
            'email' => $data['email'] ?? 'Guest',
            'password' => $data['password'] ?? 'Guest',
            'message' => 'Login Successful!'
        ]);
    }

public function signUpPage(){
    return view('signUp');
}

public function signUpStore(){
    request()->validate([
        'email'    => 'required|email|unique:log_in_auth,email', 
        'password' => 'required|min:8|confirmed',              
    ]);

    logInAuth::create([
        'email'    => request('email'),
        'password' => Hash::make(request('password')),         
    ]);

    return redirect('/')->with('success', 'Account created! Please log in.');
}
}