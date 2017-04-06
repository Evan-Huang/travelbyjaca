@extends('frontend.templete.master')

@section('title')

@section('body')
    <div class="container question3_bg">
        <div class="row">
            <div class="col-sm-12">
                <div class="center" style="position: absolute;width: 280px;bottom:200px;left: 50%;margin-left: -140px;">
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">當然看哪個便宜住哪個</p>
                    </div>
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">要住周邊有好多餐廳那家</p>
                    </div>
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">我就愛大型連鎖知名酒店</p>
                    </div>
                    <div class="item">
                        <input name="answer" type="radio" style="display: inline" class="pull-left"><p class="" style="padding-left: 20px;">就要貴的</p>
                    </div>

                    <a class="btn center-block" style="background-color: #563907;border-color: #563907;color: #f1ca88;margin-top: 20px;" href="#">下一題</a>
                </div>
                <div class="bottom_pic_3" style="position: absolute;bottom:0px;width: 100%;padding-top: 53%;left: 0;"></div>
            </div>
        </div>
    </div>
@stop

@section('js')

@stop