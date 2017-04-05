<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    //Home
    public function index() {
        $user = session('wechat.oauth_user');
        if ($user) {
            return view('frontend.home.index')->with('fromuser',$user->getNickname());
        }
        return view('frontend.home.index');
    }
}
