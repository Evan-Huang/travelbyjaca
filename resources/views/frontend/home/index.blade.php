@extends('frontend.templete.master')

@section('title','Home')

@section('body')
    <div class="container home_bg">
        <div class="row">
            <div class="col-sm-12">
                <div class="center" style="position: absolute;bottom: 10px;left: 25%">
                    <label>{{ isset($fromuser) ? $fromuser : '' }}</label>邀請你來測試
                    <p class="text-center">你們到底適不適合一起旅行</p>
                    <a class="btn btn-primary" href="#">設置我的旅行偏好</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
<script>

</script>
@stop