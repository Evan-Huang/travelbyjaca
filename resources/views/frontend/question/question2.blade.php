@extends('frontend.templete.master')

@section('title')

@section('body')
    <div class="container question2_bg">
        <div class="row">
            <div class="col-sm-12">
                <div class="center" style="position: absolute;width: 280px;bottom:200px;left: 50%;margin-left: -140px;">
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">當然看哪個便宜選哪個</p>
                    </div>
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">較看重時間段，貴一點也能接受</p>
                    </div>
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">我是xxx公司的頭號粉絲，其他的不坐</p>
                    </div>
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">只選貴的，哪家不重要</p>
                    </div>

                    <a class="btn center-block" style="background-color: #563907;border-color: #563907;color: #f1ca88;margin-top: 20px;" href="{{ url('/question?num=3') }}">下一題</a>
                </div>
                <div class="bottom_pic_2" style="position: absolute;bottom:0px;width: 100%;padding-top: 42%;left: 0;">
                    {{--<img src="{{ asset('images/question_pic_1.png') }}">--}}
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')

@stop