@extends('frontend.templete.master')

@section('title','Home')

@section('body')
    <div class="container home_bg">
        <div class="row">
            <div class="col-sm-12">
                <div class="center" style="position: absolute;width: 300px;bottom:50px;left: 50%;margin-left: -150px;">
                    <p class="text-center fromuser">{{ isset($fromuser) ? $fromuser : '' }}aa</p>
                    <p class="text-center">你們到底適不適合一起旅行</p>
                    <a class="btn btn-primary center-block" href="#">設置我的旅行偏好</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
<script>

</script>
@stop