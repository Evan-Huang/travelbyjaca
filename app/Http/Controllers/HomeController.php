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
        $user = session('wechat.oauth_user');
        $wechat = app('wechat');
        $js = $wechat->js;

        if ($request->method() == 'GET' && $request->input('num')) {
            return view('frontend.question.question' . $request->input('num'))->with('user',$user)->with('js',$js);
        }
    }

    public function testquestion1() {
        return view('frontend.question.question1');
    }

    public function testquestion2() {
        return view('frontend.question.question2');
    }

    public function testquestion3() {
        return view('frontend.question.question3');
    }
}
