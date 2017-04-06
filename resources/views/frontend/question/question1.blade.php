@extends('frontend.templete.master')

@section('title')

@section('body')
    <div class="container question1_bg">
        <div class="row">
            <div class="col-sm-12">
                <div class="center" style="position: absolute;width: 280px;bottom:200px;left: 50%;margin-left: -140px;">
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">每天都要玩的，我都訂好了</p>
                    </div>
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">我大概定了主要去哪幾個景點</p>
                    </div>
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">我只確定了去哪個城市</p>
                    </div>
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">到了當地再說吧</p>
                    </div>

                    <a class="btn center-block" style="background-color: #563907;border-color: #563907;color: #f1ca88;margin-top: 20px;" href="{{ url('/question?num=2') }}">下一題</a>
                </div>
                <div class="bottom_pic_1" style="position: absolute;bottom:0px;width: 100%;padding-top: 53%;left: 0;">
                    {{--<img src="{{ asset('images/question_pic_1.png') }}">--}}
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')

@stop