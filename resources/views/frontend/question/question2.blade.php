@extends('frontend.templete.master')

@section('title')

@section('body')
    <div class="container question2_bg">
        <div class="row">
            <div class="col-sm-12">
                <div class="center items">
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
                <div class="bottom_pic_2" style="position: absolute;bottom:0px;width: 100%;padding-top: 42%;left: 0;"></div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        wx.config(<?php echo $js->config(array('onMenuShareAppMessage','onMenuShareTimeline','onMenuShareQQ', 'onMenuShareWeibo'), false) ?>);
        var sharepath = window.location.host+'/home/?fromuser='+ '<?php echo $user->getNickname() ?>';
        //        alert(sharepath);
        var imgurl = '<?php echo $user->getAvatar() ?>';
        var title = '<?php echo $user->getNickname() ?>' + '邀請你測試你倆適合不適合一起旅行';
        var desc = '快來匹配你們的旅行偏好吧！';
        //        alert(imgurl);
        wx.ready(function(){
            // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
            wx.onMenuShareAppMessage({
                title: title, // 分享标题
                desc: desc, // 分享描述
                link: sharepath, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                imgUrl: imgurl, // 分享图标
                type: '', // 分享类型,music、video或link，不填默认为link
                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                success: function () {
                    // 用户确认分享后执行的回调函数
                    alert('分享成功！！！')
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                    alert('分享失敗！！！')
                }
            });

            wx.onMenuShareTimeline({
                title: title, // 分享标题
                link: sharepath, // 分享链接
                imgUrl: imgurl, // 分享图标
                success: function () {
                    // 用户确认分享后执行的回调函数
                    alert('分享成功！！！')
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                    alert('分享失敗！！！')
                }
            });
        });

        //        alert('成功！！！');
    </script>
@stop