<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class theController extends Controller
{
    public function sessioner(){

        $logins = session()->get('logIn', []);

        return view('logIn', [
            'logins' => $logins
        ]);
    }

    public function validator(){
        $corEmail = 'admin@gmail.com';
        $corPass = '123456';

        request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $email = request('email');
        $password = request('password');

        if($email == $corEmail && $password == $corPass){
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
            'message' => 'Login Successful!'
        ]);
    }
}
