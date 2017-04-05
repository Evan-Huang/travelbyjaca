@extends('frontend.templete.master')

@section('title','Home')

@section('body')
    <div class="container home_bg">
        <div class="row">
            <div class="col-sm-12">
                <div class="center" style="position: absolute;width: 300px;bottom:50px;left: 50%;margin-left: -150px;">
                    <p class="text-center fromuser">{{ isset($fromuser) ? $fromuser : '' }}</p>
                    <p class="text-center">你們到底適不適合一起旅行</p>
                    <a class="btn btn-primary center-block" href="#">設置我的旅行偏好</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        wx.config(<?php echo $js->config(array('onMenuShareAppMessage','onMenuShareQQ', 'onMenuShareWeibo'), true) ?>);
        var fromuser = $('.fromuser').val();
        var sharepath = window.location.host+'/?fromuser='+ '<?php echo $user->getNickname() ?>';
        var imgurl = '<?php echo $user->getAvatar() ?>';
        wx.onMenuShareAppMessage({
            title: fromuser + '邀請你測試你倆適合不適合一起旅行', // 分享标题
            desc: '快來匹配你們的旅行偏好吧！', // 分享描述
            link: sharepath, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
            imgUrl: imgurl, // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
    </script>
@stop