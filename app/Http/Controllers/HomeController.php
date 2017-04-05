<?php

namespace App\Http\Controllers;


use EasyWeChat\Foundation\Application;

class HomeController extends Controller
{
    //Home
    public function index() {
        $user = session('wechat.oauth_user');
        $wechat = app('wechat');
        $js = $wechat->js;
        if ($user) {
            return view('frontend.home.index')->with('fromuser',$user->getNickname())->with('js',$js);
        }
        return view('frontend.home.index');
    }

    public function demo(Application $wechat)
    {
        // $wechat 则为容器中 EasyWeChat\Foundation\Application 的实例
    }
}
