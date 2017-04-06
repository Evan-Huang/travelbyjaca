<?php

namespace App\Http\Controllers;



use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home
    public function index(Request $request) {
        $fromuser = $request->input('fromuser');
        $user = session('wechat.oauth_user');
        $wechat = app('wechat');
        $js = $wechat->js;
        if ($user && $fromuser) {
            return view('frontend.home.index')->with('fromuser',$fromuser)->with('user',$user)->with('js',$js);
        }elseif ($user) {
            return view('frontend.home.index')->with('fromuser','攜程旅行')->with('user',$user)->with('js',$js);
        }
        return view('frontend.home.index');
    }

    public function question(Request $request)
    {
        if ($request->method() == 'GET' && $request->input('num')) {
            return view('frontend.question.question' . $request->input('num'));
        }
    }
}
